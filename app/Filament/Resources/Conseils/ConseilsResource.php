<?php

namespace App\Filament\Resources\Conseils;

use App\Filament\Resources\Conseils\Pages\CreateConseils;
use App\Filament\Resources\Conseils\Pages\EditConseils;
use App\Filament\Resources\Conseils\Pages\ListConseils;
use App\Filament\Resources\Conseils\Pages\ViewConseils;
use App\Filament\Resources\Conseils\Schemas\ConseilsForm;
use App\Filament\Resources\Conseils\Schemas\ConseilsInfolist;
use App\Filament\Resources\Conseils\Tables\ConseilsTable;
use App\Models\Conseils;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ConseilsResource extends Resource
{
    protected static ?string $model = Conseils::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-shield-check';

    protected static ?string $recordTitleAttribute = 'titre';

    public static function form(Schema $schema): Schema
    {
        return ConseilsForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ConseilsInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ConseilsTable::configure($table);
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
            'index' => ListConseils::route('/'),
            'create' => CreateConseils::route('/create'),
            'view' => ViewConseils::route('/{record}'),
            'edit' => EditConseils::route('/{record}/edit'),
        ];
    }
}
