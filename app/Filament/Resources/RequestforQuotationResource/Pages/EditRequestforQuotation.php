<?php

namespace App\Filament\Resources\RequestforQuotationResource\Pages;

use App\Filament\Resources\RequestforQuotationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRequestforQuotation extends EditRecord
{
    protected static string $resource = RequestforQuotationResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
