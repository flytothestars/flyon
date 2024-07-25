<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KaspiShopResource\Pages;
use App\Filament\Resources\KaspiShopResource\RelationManagers;
use App\Models\Shop\Kaspi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KaspiShopResource extends Resource
{
    protected static ?string $model = Kaspi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Kaspi';
    protected static ?string $navigationGroup = 'Магазины';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListKaspiShops::route('/'),
            'create' => Pages\CreateKaspiShop::route('/create'),
            'edit' => Pages\EditKaspiShop::route('/{record}/edit'),
        ];
    }
}
