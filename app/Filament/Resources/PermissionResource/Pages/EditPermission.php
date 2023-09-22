<?php

namespace App\Filament\Resources\PermissionResource\Pages;

use App\Filament\Resources\PermissionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPermission extends EditRecord
{
    protected static string $resource = PermissionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    //CUSTOM UPDATE
    protected function getSavedNotificationTitle(): ?string
{
    return 'Permission Updated';
}

//PERMISION ROUTE AFTER UPDATE
protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
}