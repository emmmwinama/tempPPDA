<?php

namespace App\Filament\Resources\OpenTenderResource\Pages;

use App\Filament\Resources\OpenTenderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOpenTender extends EditRecord
{
    protected static string $resource = OpenTenderResource::class;

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
