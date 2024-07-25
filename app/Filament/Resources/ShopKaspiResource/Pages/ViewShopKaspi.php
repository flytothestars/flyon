<?php

namespace App\Filament\Resources\ShopKaspiResource\Pages;

use App\Filament\Resources\ShopKaspiResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewShopKaspi extends ViewRecord
{
    protected static string $resource = ShopKaspiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
