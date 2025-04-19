<?php

namespace App\Filament\Resources\PdesResource\Pages;

use App\Filament\Resources\PdesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPdes extends ListRecords
{
    protected static string $resource = PdesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
