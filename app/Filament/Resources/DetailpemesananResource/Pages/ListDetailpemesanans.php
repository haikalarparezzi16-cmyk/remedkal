<?php

namespace App\Filament\Resources\DetailpemesananResource\Pages;

use App\Filament\Resources\DetailpemesananResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDetailpemesanans extends ListRecords
{
    protected static string $resource = DetailpemesananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
