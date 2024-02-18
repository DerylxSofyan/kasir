<?php

namespace App\Filament\Resources\DetailtransactionsResource\Pages;

use App\Filament\Resources\DetailtransactionsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDetailtransactions extends ListRecords
{
    protected static string $resource = DetailtransactionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
