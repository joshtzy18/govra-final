<?php

namespace App\Filament\Resources\GovernmentResource\Pages;

use App\Filament\Resources\GovernmentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGovernment extends CreateRecord
{
    protected static string $resource = GovernmentResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
{
    $data['user_id'] = auth()->id();
 
    return $data;
}

protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}

protected function getCreatedNotificationTitle(): ?string
{
    return 'Government Created';
}
}