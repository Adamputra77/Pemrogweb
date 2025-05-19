<?php

namespace App\Filament\Admin\Resources\TokoSepatuResource\Pages;

use App\Filament\Admin\Resources\TokoSepatuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTokoSepatu extends EditRecord
{
    protected static string $resource = TokoSepatuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
