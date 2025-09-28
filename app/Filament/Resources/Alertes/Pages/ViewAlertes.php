<?php

namespace App\Filament\Resources\Alertes\Pages;

use App\Filament\Resources\Alertes\AlertesResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAlertes extends ViewRecord
{
    protected static string $resource = AlertesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
