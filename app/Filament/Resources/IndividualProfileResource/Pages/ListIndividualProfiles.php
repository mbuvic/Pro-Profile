<?php

namespace App\Filament\Resources\IndividualProfileResource\Pages;

use App\Filament\Resources\IndividualProfileResource;
use App\Models\IndividualProfile;
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
            Actions\CreateAction::make()->label('Add New Profile'),
        ];
    }

    public function getTabs(): array
    {
        // Base query for this resource’s table (without any tab scoping yet)
        $baseQuery = IndividualProfile::query();

        return [
            'all' => Tab::make('All')
                ->badge(fn (): int => (clone $baseQuery)->count()),

            'active' => Tab::make('Active')
                ->badge(fn (): int => (clone $baseQuery)->where('is_active', true)->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->where('is_active', true)),

            'inactive' => Tab::make('Inactive')
                ->badge(fn (): int => (clone $baseQuery)->where('is_active', false)->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->where('is_active', false)),

            'archived' => Tab::make('Archived')
                ->badge(fn (): int => (clone $baseQuery)->onlyTrashed()->count())
                ->modifyQueryUsing(fn (Builder $query) => $query->onlyTrashed()),
        ];
    }
}
