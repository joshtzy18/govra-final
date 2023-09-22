<?php

namespace App\Filament\Resources\NewsUpdatesResource\Pages;

use App\Filament\Resources\NewsUpdatesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewNewsUpdates extends ViewRecord
{
    protected static string $resource = NewsUpdatesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
