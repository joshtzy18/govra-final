<?php

namespace App\Filament\Resources\GovernmentResource\Pages;

use App\Filament\Resources\GovernmentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGovernments extends ListRecords
{
    protected static string $resource = GovernmentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
