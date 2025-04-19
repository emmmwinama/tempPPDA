<?php

namespace App\Filament\Resource\ResourceResource\Pages;

use App\Filament\Resource\ResourceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditResource extends EditRecord
{
    protected static string $resource = ResourceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
