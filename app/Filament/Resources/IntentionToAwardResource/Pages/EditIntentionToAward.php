<?php

namespace App\Filament\Resources\IntentionToAwardResource\Pages;

use App\Filament\Resources\IntentionToAwardResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIntentionToAward extends EditRecord
{
    protected static string $resource = IntentionToAwardResource::class;

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
