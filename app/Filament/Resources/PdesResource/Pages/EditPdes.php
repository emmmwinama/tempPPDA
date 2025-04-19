<?php

namespace App\Filament\Resources\PdesResource\Pages;

use App\Filament\Resources\PdesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPdes extends EditRecord
{
    protected static string $resource = PdesResource::class;

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
