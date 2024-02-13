<?php

namespace App\Filament\Resources\ParnerResource\Pages;

use Filament\Actions;
use App\Models\section;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ParnerResource;
use App\Models\parner;

class EditParner extends EditRecord
{
    protected static string $resource = ParnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make()->after(
                function (parner $record) {
                    if ($record ->thumbnail){
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            ),
        ];
    }
}
