<?php

namespace App\Filament\Resources\CustomerTenderResource\Pages;

use App\Filament\Resources\CustomerTenderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCustomerTender extends EditRecord
{
    protected static string $resource = CustomerTenderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
