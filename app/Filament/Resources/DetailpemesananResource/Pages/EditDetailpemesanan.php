<?php

namespace App\Filament\Resources\DetailpemesananResource\Pages;

use App\Filament\Resources\DetailpemesananResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDetailpemesanan extends EditRecord
{
    protected static string $resource = DetailpemesananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
