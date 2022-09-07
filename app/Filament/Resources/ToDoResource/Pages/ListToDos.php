<?php

namespace App\Filament\Resources\ToDoResource\Pages;

use App\Filament\Resources\ToDoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListToDos extends ListRecords
{
    protected static string $resource = ToDoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
