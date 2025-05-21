<?php

namespace App\Filament\Admin\Resources\BusinessProfileResource\Pages;

use App\Filament\Admin\Resources\BusinessProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBusinessProfile extends CreateRecord
{
    protected static string $resource = BusinessProfileResource::class;
}
