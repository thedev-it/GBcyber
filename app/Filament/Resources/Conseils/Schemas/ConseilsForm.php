<?php

namespace App\Filament\Resources\Conseils\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ConseilsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('titre')
                    ->required(),
                TextInput::make('sous_titre')
                    ->required(),
                TextInput::make('image')
                    ->label('Lien visuel')
                    ->required(),

                MarkdownEditor::make('description')
                  ->columnSpanFull()
                  ->fileAttachmentsDirectory('conseils')
                    
            ]);
    }
}
