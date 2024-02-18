<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DetailtransactionsResource\Pages;
use App\Filament\Resources\DetailtransactionsResource\RelationManagers;
use App\Models\Detailtransactions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DetailtransactionsResource extends Resource
{
    protected static ?string $model = Detailtransactions::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('PenjualanID')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('ProdukID')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('JumlahProduk')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('Subtotal')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('PenjualanID')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ProdukID')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('JumlahProduk')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Subtotal')
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
            'index' => Pages\ListDetailtransactions::route('/'),
            'create' => Pages\CreateDetailtransactions::route('/create'),
            'edit' => Pages\EditDetailtransactions::route('/{record}/edit'),
        ];
    }
}
