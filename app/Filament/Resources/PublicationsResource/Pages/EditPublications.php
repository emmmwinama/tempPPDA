<?php

namespace App\Filament\Resources\PublicationsResource\Pages;

use App\Filament\Resources\PublicationsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPublications extends EditRecord
{
    protected static string $resource = PublicationsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
