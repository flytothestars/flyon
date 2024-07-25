<?php

namespace App\Filament\Resources\KaspiShopResource\Pages;

use App\Filament\Resources\KaspiShopResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKaspiShop extends EditRecord
{
    protected static string $resource = KaspiShopResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
