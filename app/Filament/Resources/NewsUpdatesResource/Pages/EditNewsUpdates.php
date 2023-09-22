<?php

namespace App\Filament\Resources\NewsUpdatesResource\Pages;

use App\Filament\Resources\NewsUpdatesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNewsUpdates extends EditRecord
{
    protected static string $resource = NewsUpdatesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}

protected function getSavedNotificationTitle(): ?string
{
    return 'News and Update Updated';
}

}