<?php

namespace App\Filament\Resources\Outils\Schemas;

use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class OutilsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('type_outil')
                    ->required(),
                TextInput::make('titre')
                    ->required(),
                TextInput::make('tarification')
                    ->required(),
                MarkdownEditor::make('description')
                    ->required()
                     ->columnSpanFull()
                     ->fileAttachmentsDirectory('outils')
                    ->columnSpanFull(),
                    
                TextInput::make('lien_outil')
                    ->required(),
            ]);
    }
}
