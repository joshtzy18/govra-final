<?php

namespace App\Filament\Resources\NewsUpdatesResource\Pages;

use App\Filament\Resources\NewsUpdatesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNewsUpdates extends CreateRecord
{
    protected static string $resource = NewsUpdatesResource::class;
    
    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}

protected function getCreatedNotificationTitle(): ?string
{
    return 'News and Updates Created';
}
}