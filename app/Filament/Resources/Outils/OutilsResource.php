<?php

namespace App\Filament\Resources\Outils;

use App\Filament\Resources\Outils\Pages\CreateOutils;
use App\Filament\Resources\Outils\Pages\EditOutils;
use App\Filament\Resources\Outils\Pages\ListOutils;
use App\Filament\Resources\Outils\Schemas\OutilsForm;
use App\Filament\Resources\Outils\Tables\OutilsTable;
use App\Models\Outils;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OutilsResource extends Resource
{
    protected static ?string $model = Outils::class;

    protected static string|BackedEnum|null $navigationIcon ="heroicon-o-wrench-screwdriver";

    protected static ?string $recordTitleAttribute = 'type_outil';

    public static function form(Schema $schema): Schema
    {
        return OutilsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OutilsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListOutils::route('/'),
            'create' => CreateOutils::route('/create'),
            'edit' => EditOutils::route('/{record}/edit'),
        ];
    }
}
