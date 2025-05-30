<?php

namespace App\Filament\Client\Resources\ProductResource\Pages;

use App\Filament\Client\Resources\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;
}
