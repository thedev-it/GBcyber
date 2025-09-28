<?php

namespace App\Filament\Resources\Conseils\Pages;

use App\Filament\Resources\Conseils\ConseilsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListConseils extends ListRecords
{
    protected static string $resource = ConseilsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
