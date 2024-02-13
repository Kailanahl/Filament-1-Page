<?php

namespace App\Filament\Resources\ParnerResource\Pages;

use App\Filament\Resources\ParnerResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewParner extends ViewRecord
{
    protected static string $resource = ParnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
