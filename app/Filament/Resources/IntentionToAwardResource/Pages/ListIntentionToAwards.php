<?php

namespace App\Filament\Resources\IntentionToAwardResource\Pages;

use App\Filament\Resources\IntentionToAwardResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIntentionToAwards extends ListRecords
{
    protected static string $resource = IntentionToAwardResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
