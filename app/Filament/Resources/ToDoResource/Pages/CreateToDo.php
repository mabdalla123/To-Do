<?php

namespace App\Filament\Resources\ToDoResource\Pages;

use App\Filament\Resources\ToDoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateToDo extends CreateRecord
{
    protected static string $resource = ToDoResource::class;


    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }
}
