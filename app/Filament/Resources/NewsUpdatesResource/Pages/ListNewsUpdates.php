<?php

namespace App\Filament\Resources\NewsUpdatesResource\Pages;

use App\Filament\Resources\NewsUpdatesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNewsUpdates extends ListRecords
{
    protected static string $resource = NewsUpdatesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
