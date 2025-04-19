<?php

namespace App\Filament\Resource\ResourceResource\Pages;

use App\Filament\Resource\ResourceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateResource extends CreateRecord
{
    protected static string $resource = ResourceResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }


}
