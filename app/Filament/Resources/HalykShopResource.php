<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HalykShopResource\Pages;
use App\Filament\Resources\HalykShopResource\RelationManagers;
use App\Models\Shop\Halyk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HalykShopResource extends Resource
{
    protected static ?string $model = Halyk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Halyk';
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
            'index' => Pages\ListHalykShops::route('/'),
            'create' => Pages\CreateHalykShop::route('/create'),
            'edit' => Pages\EditHalykShop::route('/{record}/edit'),
        ];
    }
}
