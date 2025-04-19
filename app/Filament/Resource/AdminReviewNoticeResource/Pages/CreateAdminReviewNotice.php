<?php

namespace App\Filament\Resource\AdminReviewNoticeResource\Pages;

use App\Filament\Resource\AdminReviewNoticeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAdminReviewNotice extends CreateRecord
{
    protected static string $resource = AdminReviewNoticeResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
