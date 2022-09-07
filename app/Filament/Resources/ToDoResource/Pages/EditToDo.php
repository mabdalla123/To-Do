<?php

namespace App\Filament\Resources\ToDoResource\Pages;

use App\Filament\Resources\ToDoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditToDo extends EditRecord
{
    protected static string $resource = ToDoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
