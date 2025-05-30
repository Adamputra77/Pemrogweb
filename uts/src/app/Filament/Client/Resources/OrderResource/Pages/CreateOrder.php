<?php

namespace App\Filament\Client\Resources\OrderResource\Pages;

use App\Filament\Client\Resources\OrderResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOrder extends CreateRecord
{
    protected static string $resource = OrderResource::class;

    // Method yang benar untuk redirect setelah create
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('payment', ['order' => $this->record->id]);
    }

    // Optional: Custom tombol Create
    protected function getFormActions(): array
{
    return [
        Actions\Action::make('create')
            ->label('Buat Pesanan')
            ->submit('create')
            ->action(function () {
                $this->create();
                
                return redirect()->to(
                    $this->getResource()::getUrl('payment', ['order' => $this->record->id])
                );
            }),
    ];
}
}