<?php

namespace App\Filament\Admin\Resources\SubscriptionPackageResource\Pages;

use App\Filament\Admin\Resources\SubscriptionPackageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubscriptionPackage extends EditRecord
{
    protected static string $resource = SubscriptionPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
