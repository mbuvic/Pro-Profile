<?php

namespace App\Filament\Resources\IndividualProfileResource\Pages;

use App\Filament\Resources\IndividualProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIndividualProfile extends EditRecord
{
    protected static string $resource = IndividualProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
