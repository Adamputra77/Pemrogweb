<?php

namespace App\Filament\Client\Resources\OrderResource\Pages;

use App\Filament\Client\Resources\OrderResource;
use App\Models\Order;
use Filament\Actions;
use Filament\Resources\Pages\Page;
use Filament\Forms\Components\FileUpload;

class PaymentOrder extends Page
{
    protected static string $resource = OrderResource::class;
    protected static string $view = 'filament.client.resources.order-resource.pages.payment-order';

    public Order $order;

    public function mount(Order $order): void
    {
        $this->order = $order;
    }

    public function getFormActions(): array
    {
        return [
            Actions\Action::make('submit')
                ->label('Bayar Sekarang')
                ->submit('submit'),
            Actions\Action::make('cancel')
                ->label('Batal')
                ->url($this->getResource()::getUrl('index'))
                ->color('gray'),
        ];
    }

    // Di dalam class PaymentOrder
protected function hasFullWidthFormActions(): bool
{
    return false; // Atau true jika ingin tombol full width
}

    public function getPaymentInstructions(): ?string
    {
        return match($this->order->payment_method) {
            'bank_transfer' => "Transfer ke:\nBank: BCA\nRekening: 1234567890\nAtas Nama: Nama Perusahaan Anda",
            'qris' => "Scan QR code di bawah untuk pembayaran",
            'credit_card' => "Anda akan dialihkan ke payment gateway",
            default => null,
        };
    }

    protected function getFormSchema(): array
{
    return [
        FileUpload::make('payment_proof')
            ->label('Upload Bukti Transfer')
            ->image()
            ->required()
            ->directory('payment-proofs')
            ->maxSize(2048) // 2MB
            ->acceptedFileTypes(['image/jpeg', 'image/png'])
            ->visibility('private'),
    ];
}

public function submit()
{
    $data = $this->form->getState();
    
    // Update order dengan bukti transfer
    $this->order->update([
        'payment_proof' => $data['payment_proof'],
        'payment_status' => 'pending_verification'
    ]);
    
    $this->notify('success', 'Bukti pembayaran berhasil diupload! Admin akan memverifikasi pembayaran Anda.');
    return $this->redirect($this->getResource()::getUrl('index'));
}
}