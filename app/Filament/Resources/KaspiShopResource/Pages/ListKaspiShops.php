<?php

namespace App\Filament\Resources\KaspiShopResource\Pages;

use App\Filament\Resources\KaspiShopResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKaspiShops extends ListRecords
{
    protected static string $resource = KaspiShopResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
