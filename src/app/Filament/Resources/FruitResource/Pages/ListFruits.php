<?php

namespace App\Filament\Resources\FruitResource\Pages;

use App\Filament\Resources\FruitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFruits extends ListRecords
{
    protected static string $resource = FruitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

   
}