<?php

namespace App\Filament\Resources\Alertes\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AlertesInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('type_alerte'),
                TextEntry::make('titre'),
                TextEntry::make('sous_titre'),
                TextEntry::make('source_alerte'),
                ImageEntry::make('image'),
                TextEntry::make('status'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
