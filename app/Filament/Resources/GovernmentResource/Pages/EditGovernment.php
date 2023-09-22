<?php

namespace App\Filament\Resources\GovernmentResource\Pages;

use App\Filament\Resources\GovernmentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGovernment extends EditRecord
{
    protected static string $resource = GovernmentResource::class;

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
    return 'Government Updated';
}


   
}