<x-filament-panels::page>
    <x-filament-panels::form wire:submit="submit">
        {{ $this->form }}

        @if($instructions = $this->getPaymentInstructions())
            <x-filament::section>
                <x-slot name="heading">
                    Instruksi Pembayaran
                </x-slot>
                
                <div class="prose dark:prose-invert">
                    {!! nl2br(e($instructions)) !!}
                </div>
                
                @if($this->order->payment_method === 'qris')
                    <div class="mt-4 flex justify-center">
                        <img src="{{ asset('images/qris-example.png') }}" alt="QRIS Code" class="h-64 w-64">
                    </div>
                @endif
            </x-filament::section>
        @endif

        <x-filament-panels::form.actions
            :actions="$this->getFormActions()"
            :full-width="$this->hasFullWidthFormActions()"
        />
    </x-filament-panels::form>
</x-filament-panels::page>