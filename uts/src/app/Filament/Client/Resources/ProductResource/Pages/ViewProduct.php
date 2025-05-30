<?php

namespace App\Filament\Client\Resources\ProductResource\Pages;

use App\Filament\Client\Resources\ProductResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\Grid;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\Section;

class ViewProduct extends ViewRecord
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return []; // Remove edit button
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Detail Produk')
                    ->schema([
                        Grid::make(2)->schema([
                            ImageEntry::make('image')
                                ->label('Gambar Produk')
                                ->height(250),

                            TextEntry::make('name')
                                ->label('Nama Produk')
                                ->size(TextEntry\TextEntrySize::Large)
                                ->weight('bold'),
                        ]),

                        TextEntry::make('category')
                            ->label('Kategori'),

                        TextEntry::make('price')
                            ->label('Harga')
                            ->money('IDR'),

                        TextEntry::make('sizes')
                            ->label('Ukuran Tersedia')
                            ->formatStateUsing(function ($state) {
                                // Handle cases where sizes might be an array, JSON string, or null
                                if (is_array($state)) {
                                    return implode(', ', $state);
                                }
                                
                                if (is_string($state)) {
                                    $decoded = json_decode($state, true);
                                    if (json_last_error() === JSON_ERROR_NONE) {
                                        return implode(', ', $decoded);
                                    }
                                    return $state; // Return as-is if not valid JSON
                                }
                                
                                return '-'; // Fallback for null or unexpected types
                            }),

                        TextEntry::make('short_desc')
                            ->label('Deskripsi')
                            ->markdown(),

                        TextEntry::make('is_active')
                            ->label('Status')
                            ->badge()
                            ->formatStateUsing(fn ($state) => $state ? 'Aktif' : 'Tidak Aktif')
                            ->color(fn ($state) => $state ? 'success' : 'danger'),
                    ])
            ]);
    }
}