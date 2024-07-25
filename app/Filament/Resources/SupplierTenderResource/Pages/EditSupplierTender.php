<?php

namespace App\Filament\Resources\SupplierTenderResource\Pages;

use App\Filament\Resources\SupplierTenderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSupplierTender extends EditRecord
{
    protected static string $resource = SupplierTenderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
