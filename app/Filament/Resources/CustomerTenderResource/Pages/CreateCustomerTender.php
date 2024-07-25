<?php

namespace App\Filament\Resources\CustomerTenderResource\Pages;

use App\Filament\Resources\CustomerTenderResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomerTender extends CreateRecord
{
    protected static string $resource = CustomerTenderResource::class;
}
