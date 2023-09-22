<?php

namespace App\Filament\Resources\ExaminationResource\Pages;

use App\Filament\Resources\ExaminationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamination extends EditRecord
{
    protected static string $resource = ExaminationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getSavedNotificationTitle(): ?string
{
    return 'Examination Updated';
}
}