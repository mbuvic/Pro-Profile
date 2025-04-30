<?php

namespace App\Filament\Resources\IndividualProfileResource\Pages;

use App\Filament\Resources\IndividualProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIndividualProfiles extends ListRecords
{
    protected static string $resource = IndividualProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
