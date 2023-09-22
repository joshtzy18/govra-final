<?php

namespace App\Filament\Resources\AnnouncementResource\Pages;

use App\Filament\Resources\AnnouncementResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAnnouncement extends CreateRecord
{
    protected static string $resource = AnnouncementResource::class;

    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}

protected function getCreatedNotificationTitle(): ?string
{
    return 'Announcement Created';
}
}