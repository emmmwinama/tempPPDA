<?php

namespace App\Filament\Resources\AwardNoticeResource\Pages;

use App\Filament\Resources\AwardNoticeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAwardNotices extends ListRecords
{
    protected static string $resource = AwardNoticeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
