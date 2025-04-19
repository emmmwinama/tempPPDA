<?php

namespace App\Filament\Resources\OpenTenderResource\Pages;

use App\Filament\Resources\OpenTenderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOpenTender extends CreateRecord
{
    protected static string $resource = OpenTenderResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
