<?php

namespace App\Filament\Resource\DebarmentNoticeResource\Pages;

use App\Filament\Resource\DebarmentNoticeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDebarmentNotice extends CreateRecord
{
    protected static string $resource = DebarmentNoticeResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
