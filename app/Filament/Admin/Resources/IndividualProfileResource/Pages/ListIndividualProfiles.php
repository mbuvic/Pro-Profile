<?php

namespace App\Filament\Admin\Resources\IndividualProfileResource\Pages;

use App\Filament\Admin\Resources\IndividualProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListIndividualProfiles extends ListRecords
{
    protected static string $resource = IndividualProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make('All Profiles')
                ->badge(IndividualProfileResource::getModel()::count()),
            'active' => Tab::make('Active')
                ->badge(IndividualProfileResource::getModel()::query()->whereNull('deleted_at')->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->whereNull('deleted_at')),
            'archived' => Tab::make('Archived')
                ->badge(IndividualProfileResource::getModel()::query()->onlyTrashed()->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->onlyTrashed())
                ->icon('heroicon-o-archive-box'),
        ];
    }
}
