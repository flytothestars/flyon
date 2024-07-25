<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OzonShopResource\Pages;
use App\Filament\Resources\OzonShopResource\RelationManagers;
use App\Models\Shop\Ozon;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OzonShopResource extends Resource
{
    protected static ?string $model = Ozon::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Ozon';
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
            'index' => Pages\ListOzonShops::route('/'),
            'create' => Pages\CreateOzonShop::route('/create'),
            'edit' => Pages\EditOzonShop::route('/{record}/edit'),
        ];
    }
}
