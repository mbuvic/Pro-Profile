<?php

namespace App\Filament\Admin\Resources\IndividualProfileResource\Pages;

use App\Filament\Admin\Resources\IndividualProfileResource;
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
