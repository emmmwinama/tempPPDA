<?php

namespace App\Filament\Resources\IntentionToAwardResource\Pages;

use App\Filament\Resources\IntentionToAwardResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateIntentionToAward extends CreateRecord
{
    protected static string $resource = IntentionToAwardResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
