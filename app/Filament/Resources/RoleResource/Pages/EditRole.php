<?php

namespace App\Filament\Resources\RoleResource\Pages;

use App\Filament\Resources\RoleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRole extends EditRecord
{
    protected static string $resource = RoleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

//UPDATE ROUTE GO BACK IN TABLE
    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}

//CUSTOM NOTIFICATION IN UPDATE
    protected function getSavedNotificationTitle(): ?string
{
    return 'Role Updated';
}
}