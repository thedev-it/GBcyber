<?php

namespace App\Filament\Resources\Alertes;

use App\Filament\Resources\Alertes\Pages\CreateAlertes;
use App\Filament\Resources\Alertes\Pages\EditAlertes;
use App\Filament\Resources\Alertes\Pages\ListAlertes;
use App\Filament\Resources\Alertes\Pages\ViewAlertes;
use App\Filament\Resources\Alertes\Schemas\AlertesForm;
use App\Filament\Resources\Alertes\Schemas\AlertesInfolist;
use App\Filament\Resources\Alertes\Tables\AlertesTable;
use App\Models\Alertes;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AlertesResource extends Resource
{
    protected static ?string $model = Alertes::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-shield-exclamation';
    protected static ?string $recordTitleAttribute = 'type_alerte';

    public static function form(Schema $schema): Schema
    {
        return AlertesForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AlertesInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AlertesTable::configure($table);
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
            'index' => ListAlertes::route('/'),
            'create' => CreateAlertes::route('/create'),
            'view' => ViewAlertes::route('/{record}'),
            'edit' => EditAlertes::route('/{record}/edit'),
        ];
    }
}
