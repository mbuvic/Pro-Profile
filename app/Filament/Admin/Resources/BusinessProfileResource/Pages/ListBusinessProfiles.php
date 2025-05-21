<?php

namespace App\Filament\Admin\Resources\BusinessProfileResource\Pages;

use App\Filament\Admin\Resources\BusinessProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListBusinessProfiles extends ListRecords
{
    protected static string $resource = BusinessProfileResource::class;

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
                ->badge(BusinessProfileResource::getModel()::count()),
            'active' => Tab::make('Active')
                ->badge(BusinessProfileResource::getModel()::query()->whereNull('deleted_at')->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->whereNull('deleted_at')),
            'archived' => Tab::make('Archived')
                ->badge(BusinessProfileResource::getModel()::query()->onlyTrashed()->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->onlyTrashed())
                ->icon('heroicon-o-archive-box'),
        ];
    }
}
