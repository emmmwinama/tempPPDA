<?php

namespace App\Filament\Resources\RequestforQuotationResource\Pages;

use App\Filament\Resources\RequestforQuotationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRequestforQuotation extends CreateRecord
{
    protected static string $resource = RequestforQuotationResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
