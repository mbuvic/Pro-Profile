<?php

namespace App\Filament\Resources\IndividualProfileResource\Pages;

use App\Filament\Resources\IndividualProfileResource;
use App\Models\IndividualProfile;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;
use Filament\Notifications\Notification;


class ListIndividualProfiles extends ListRecords
{
    protected static string $resource = IndividualProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Add New Profile'),
        ];
    }

    public function mount(): void
    {
        parent::mount();

        // If someone lands directly on the "archived" tab...
        if ($this->activeTab === 'archived') {
            $this->warningToast();
        }
    }

    // Livewire hook: fires whenever $activeTab changes
    public function updating($name, $value): void
    {
        if ($name === 'activeTab' && $value === 'archived') {
            $this->warningToast();
        }
    }
    
    

    protected function warningToast(): void
    {
        Notification::make()
            ->warning()
            ->title('Retention policy reminder')
            ->body('Any profile that’s been in “Archived” for over 30 days will be permanently deleted.')
            ->send();
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
