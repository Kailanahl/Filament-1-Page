<?php

namespace App\Filament\Resources\ParnerResource\Pages;

use App\Filament\Resources\ParnerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListParners extends ListRecords
{
    protected static string $resource = ParnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
