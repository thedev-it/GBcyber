<?php

namespace App\Filament\Resources\Alertes\Pages;

use App\Filament\Resources\Alertes\AlertesResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAlertes extends EditRecord
{
    protected static string $resource = AlertesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
