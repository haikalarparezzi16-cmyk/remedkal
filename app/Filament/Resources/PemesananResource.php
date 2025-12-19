<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Pemesanan;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\PemesananResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PemesananResource\RelationManagers;
use App\Filament\Resources\PemesananResource\Pages\EditPemesanan;
use App\Filament\Resources\PemesananResource\Pages\ListPemesanans;
use App\Filament\Resources\PemesananResource\Pages\CreatePemesanan;

class PemesananResource extends Resource
{
    protected static ?string $model = Pemesanan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('pelanggan_id')
                ->label('Pelanggan')
                ->relationship('pelanggan', 'nama')
                ->searchable()
                ->required(),

                DatePicker::make('tanggal_acara')
                ->label('Tanggal Acara')
                ->required(),

                Select::make('status')
                ->options([
                    'Pending' => 'Pending',
                    'Diproses' => 'Diproses',
                    'Selesai' => 'Selesai',
                ])
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pelanggan.nama')
                    ->label('Nama Pelanggan')
                    ->searchable(),

                TextColumn::make('tanggal_acara')
                    ->label('Tanggal Acara')
                    ->date(),

                TextColumn::make('total_harga')
                    ->label('Total Harga')
                    ->money('IDR'),

                BadgeColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'warning' => 'Pending',
                        'primary' => 'Diproses',
                        'success' => 'Selesai',
                    ]),
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
            'index' => Pages\ListPemesanans::route('/'),
            'create' => Pages\CreatePemesanan::route('/create'),
            'edit' => Pages\EditPemesanan::route('/{record}/edit'),
        ];
    }
}
