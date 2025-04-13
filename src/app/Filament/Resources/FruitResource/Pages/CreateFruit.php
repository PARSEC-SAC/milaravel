<?php

namespace App\Filament\Resources\FruitResource\Pages;

use App\Filament\Resources\FruitResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFruit extends CreateRecord
{
    protected static string $resource = FruitResource::class;


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}


