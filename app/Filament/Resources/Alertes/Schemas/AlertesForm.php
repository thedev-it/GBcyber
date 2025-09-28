<?php

namespace App\Filament\Resources\Alertes\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Schema;
use PhpParser\Node\Stmt\Label;

class AlertesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('type_alerte')
                    ->label('type d\'alerte')
                    ->required(),
                TextInput::make('titre')
                    ->label('Titre')
                    ->required(),
                TextInput::make('sous_titre')
                    ->label('Apercu de la description')
                    ->required(),
                TextInput::make('source_alerte')
                     ->label('Source')
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->required(),
                Select::make('status')
                    ->required()
                    ->options([
                        'faible'=>'Faible',
                        'modéré'=>'Modéré',
                        'critique'=>'Critique'
                    ]),
                    
                MarkdownEditor::make('description')
                    ->required()
                     ->columnSpanFull()
                     ->fileAttachmentsDirectory('alerte')
                    ->columnSpanFull(),
            ]);
    }
}
