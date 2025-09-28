<?php

namespace App\Filament\Resources\Alertes\Pages;

use App\Filament\Resources\Alertes\AlertesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAlertes extends ListRecords
{
    protected static string $resource = AlertesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
