<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TokoSepatuResource\Pages;
use App\Filament\Admin\Resources\TokoSepatuResource\RelationManagers;
use App\Models\TokoSepatu;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TokoSepatuResource extends Resource
{
    protected static ?string $model = TokoSepatu::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Tipe')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Size')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Harga')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Tipe')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Size')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Harga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListTokoSepatus::route('/'),
            'create' => Pages\CreateTokoSepatu::route('/create'),
            'edit' => Pages\EditTokoSepatu::route('/{record}/edit'),
        ];
    }
}
