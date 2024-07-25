<?php

namespace App\Filament\Resources\SupplierTenderResource\Pages;

use App\Filament\Resources\SupplierTenderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSupplierTenders extends ListRecords
{
    protected static string $resource = SupplierTenderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
