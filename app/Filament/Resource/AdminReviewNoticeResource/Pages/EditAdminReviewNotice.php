<?php

namespace App\Filament\Resource\AdminReviewNoticeResource\Pages;

use App\Filament\Resource\AdminReviewNoticeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdminReviewNotice extends EditRecord
{
    protected static string $resource = AdminReviewNoticeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
