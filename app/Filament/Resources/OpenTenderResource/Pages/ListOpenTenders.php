<?php

namespace App\Filament\Resources\OpenTenderResource\Pages;

use App\Filament\Resources\OpenTenderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOpenTenders extends ListRecords
{
    protected static string $resource = OpenTenderResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
