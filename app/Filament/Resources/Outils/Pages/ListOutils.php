<?php

namespace App\Filament\Resources\Outils\Pages;

use App\Filament\Resources\Outils\OutilsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOutils extends ListRecords
{
    protected static string $resource = OutilsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
