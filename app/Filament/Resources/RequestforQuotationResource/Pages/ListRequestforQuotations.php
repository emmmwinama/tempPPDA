<?php

namespace App\Filament\Resources\RequestforQuotationResource\Pages;

use App\Filament\Resources\RequestforQuotationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRequestforQuotations extends ListRecords
{
    protected static string $resource = RequestforQuotationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
