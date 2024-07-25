<?php

namespace App\Filament\Resources\ShopKaspiResource\Pages;

use App\Filament\Resources\ShopKaspiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShopKaspi extends EditRecord
{
    protected static string $resource = ShopKaspiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
