<?php

namespace App\Filament\Admin\Resources\SubscriptionPackageResource\Pages;

use App\Filament\Admin\Resources\SubscriptionPackageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListSubscriptionPackages extends ListRecords
{
    protected static string $resource = SubscriptionPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make('All Packages')
                ->badge(SubscriptionPackageResource::getModel()::count()),
            'active' => Tab::make('Active')
                ->badge(SubscriptionPackageResource::getModel()::query()->whereNull('deleted_at')->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->whereNull('deleted_at')),
            'archived' => Tab::make('Archived')
                ->badge(SubscriptionPackageResource::getModel()::query()->onlyTrashed()->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->onlyTrashed())
                ->icon('heroicon-o-archive-box'),
        ];
    }
}
