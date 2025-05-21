<?php

namespace App\Filament\Admin\Resources\UserResource\Pages;

use App\Filament\Admin\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make('All Users')
                ->badge(UserResource::getModel()::count()),
            'active' => Tab::make('Active')
                ->badge(UserResource::getModel()::query()->whereNull('deleted_at')->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->whereNull('deleted_at')),
            'admins' => Tab::make('Admins')
                ->badge(UserResource::getModel()::query()->where('is_admin', true)->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->where('is_admin', true))
                ->icon('heroicon-o-user-group'),
            'archived' => Tab::make('Archived')
                ->badge(UserResource::getModel()::query()->onlyTrashed()->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->onlyTrashed())
                ->icon('heroicon-o-archive-box'),
        ];
    }
}
