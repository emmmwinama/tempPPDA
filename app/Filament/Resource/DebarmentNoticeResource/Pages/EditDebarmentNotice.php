<?php

namespace App\Filament\Resource\DebarmentNoticeResource\Pages;

use App\Filament\Resource\DebarmentNoticeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDebarmentNotice extends EditRecord
{
    protected static string $resource = DebarmentNoticeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
