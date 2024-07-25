<?php

namespace App\Filament\Resources\CustomerTenderResource\Pages;

use App\Filament\Resources\CustomerTenderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCustomerTenders extends ListRecords
{
    protected static string $resource = CustomerTenderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
