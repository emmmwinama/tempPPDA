<?php

namespace App\Filament\Resource\VacancyResource\Pages;

use App\Filament\Resource\VacancyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateVacancy extends CreateRecord
{
    protected static string $resource = VacancyResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
