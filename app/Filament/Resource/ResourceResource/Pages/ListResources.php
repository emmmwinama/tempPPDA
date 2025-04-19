<?php

namespace App\Filament\Resource\ResourceResource\Pages;

use App\Filament\Resource\ResourceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListResources extends ListRecords
{
    protected static string $resource = ResourceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
