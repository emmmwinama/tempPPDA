<?php

namespace App\Filament\Resources\NewslettersResource\Pages;

use App\Filament\Resources\NewslettersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNewsletters extends CreateRecord
{
    protected static string $resource = NewslettersResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
