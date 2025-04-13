<?php

namespace App\Filament\Resources\FruitResource\Pages;

use App\Filament\Resources\FruitResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFruit extends EditRecord
{
    protected static string $resource = FruitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
