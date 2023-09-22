<?php

namespace App\Filament\Resources\ExaminationResource\Pages;

use App\Filament\Resources\ExaminationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateExamination extends CreateRecord
{
    protected static string $resource = ExaminationResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): ?string
{
    return 'Examination Created';
}
}