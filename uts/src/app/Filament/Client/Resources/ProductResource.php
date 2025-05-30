<?php

namespace App\Filament\Client\Resources;

use App\Filament\Client\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Tidak perlu form, karena user tidak akan edit/create
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Nama Produk')->searchable(),
                Tables\Columns\TextColumn::make('category')->label('Kategori')->sortable(),
                Tables\Columns\TextColumn::make('price')->money('IDR')->label('Harga')->sortable(),
                Tables\Columns\TextColumn::make('short_desc')->label('Deskripsi Singkat')->limit(50),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                // Tidak ada Edit atau Delete
            ])
            ->bulkActions([
                // Tidak ada bulk delete
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'view' => Pages\ViewProduct::route('/{record}'),
            // Hilangkan route create dan edit
        ];
    }

    // public static function shouldRegisterNavigation(): bool
    // {
    //     return auth()->user()?->hasRole('customer'); // hanya untuk customer
    // }
}
