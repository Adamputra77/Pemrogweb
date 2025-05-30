<?php

namespace App\Filament\Client\Resources;

use App\Filament\Client\Resources\OrderResource\Pages;
use App\Models\Order;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    protected static ?string $navigationLabel = 'My Orders';

    protected static ?string $modelLabel = 'Order';

    protected static ?string $slug = 'my-orders';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Order Information')
                    ->description('Create a new product order')
                    ->schema([
                        Forms\Components\Select::make('product_id')
                            ->label('Product')
                            ->relationship('product', 'name')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->live()
                            ->afterStateUpdated(function ($state, Forms\Set $set) {
                                $product = Product::find($state);
                                if ($product) {
                                    $set('total_price', $product->price);
                                    $set('size', null); // Reset size when product changes
                                }
                            })
                            ->columnSpanFull(),
                            
                        Forms\Components\Select::make('size')
                            ->label('Size')
                            ->required()
                            ->options(function (Forms\Get $get) {
                                $product = Product::find($get('product_id'));
                                if (!$product) {
                                    return [];
                                }
                                
                                $sizes = json_decode($product->sizes, true);
                                return is_array($sizes) ? array_combine($sizes, $sizes) : [];
                            })
                            ->native(false)
                            ->live(),
                            
                        Forms\Components\TextInput::make('total_price')
                            ->label('Total Price')
                            ->numeric()
                            ->prefix('Rp')
                            ->required()
                            ->readOnly()
                            ->columnSpan(1),
                            
                        Forms\Components\Select::make('payment_method')
                            ->label('Payment Method')
                            ->options([
                                'qris' => 'QRIS',
                                'bank_transfer' => 'Bank Transfer',
                                'cash' => 'Cash on Delivery',
                            ])
                            ->required()
                            ->native(false)
                            ->columnSpan(1),
                            
                        Forms\Components\Textarea::make('shipping_address')
                            ->label('Shipping Address')
                            ->required()
                            ->columnSpanFull()
                            ->rows(3),
                            
                            Forms\Components\Hidden::make('order_code')
                            ->default(function () {
                                return Order::generateOrderCode();
                            }),
                            
                        Forms\Components\Hidden::make('user_id')
                            ->default(auth()->id()),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('order_code')
                    ->label('Order ID')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('product.name')
                    ->label('Product')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('size')
                    ->label('Size')
                    ->badge(),
                    
                Tables\Columns\TextColumn::make('total_price')
                    ->label('Amount')
                    ->money('IDR')
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('payment_method')
                    ->label('Payment')
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'qris' => 'QRIS',
                        'bank_transfer' => 'Bank Transfer',
                        'cash' => 'Cash',
                        default => $state,
                    })
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'qris' => 'info',
                        'bank_transfer' => 'primary',
                        'cash' => 'success',
                        default => 'gray',
                    }),
                    
                Tables\Columns\TextColumn::make('payment_status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'paid' => 'success',
                        'failed' => 'danger',
                        'cancelled' => 'gray',
                        default => 'gray',
                    })
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Order Date')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('payment_status')
                    ->options([
                        'pending' => 'Pending',
                        'paid' => 'Paid',
                        'failed' => 'Failed',
                        'cancelled' => 'Cancelled',
                    ])
                    ->label('Payment Status'),
                    
                Tables\Filters\SelectFilter::make('payment_method')
                    ->options([
                        'qris' => 'QRIS',
                        'bank_transfer' => 'Bank Transfer',
                        'cash' => 'Cash',
                    ])
                    ->label('Payment Method'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make()
                    ->visible(fn (Order $record) => $record->payment_status === 'pending'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
            'payment' => Pages\PaymentOrder::route('/{order}/payment'),
        ];
    }

}