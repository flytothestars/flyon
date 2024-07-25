<?php

namespace App\Filament\Resources\OzonShopResource\Pages;

use App\Filament\Resources\OzonShopResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOzonShop extends EditRecord
{
    protected static string $resource = OzonShopResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
