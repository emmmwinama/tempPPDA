<?php

namespace App\Filament\Resources\AwardNoticeResource\Pages;

use App\Filament\Resources\AwardNoticeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAwardNotice extends EditRecord
{
    protected static string $resource = AwardNoticeResource::class;

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
