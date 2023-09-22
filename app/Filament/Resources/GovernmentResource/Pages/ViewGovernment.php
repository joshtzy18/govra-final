<?php

namespace App\Filament\Resources\GovernmentResource\Pages;

use App\Filament\Resources\GovernmentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewGovernment extends ViewRecord
{
    protected static string $resource = GovernmentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
