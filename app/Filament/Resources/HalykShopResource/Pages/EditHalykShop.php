<?php

namespace App\Filament\Resources\HalykShopResource\Pages;

use App\Filament\Resources\HalykShopResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHalykShop extends EditRecord
{
    protected static string $resource = HalykShopResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
