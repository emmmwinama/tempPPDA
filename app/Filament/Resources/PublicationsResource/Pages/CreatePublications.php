<?php

namespace App\Filament\Resources\PublicationsResource\Pages;

use App\Filament\Resources\PublicationsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePublications extends CreateRecord
{
    protected static string $resource = PublicationsResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
