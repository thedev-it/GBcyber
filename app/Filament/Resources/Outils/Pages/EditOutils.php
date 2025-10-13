<?php

namespace App\Filament\Resources\Outils\Pages;

use App\Filament\Resources\Outils\OutilsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditOutils extends EditRecord
{
    protected static string $resource = OutilsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
