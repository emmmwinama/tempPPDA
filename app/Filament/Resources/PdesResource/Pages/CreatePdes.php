<?php

namespace App\Filament\Resources\PdesResource\Pages;

use App\Filament\Resources\PdesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePdes extends CreateRecord
{
    protected static string $resource = PdesResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
