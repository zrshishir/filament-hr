<?php

namespace App\Filament\Resources\EmploymentResource\Pages;

use App\Filament\Resources\EmploymentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEmployment extends EditRecord
{
    protected static string $resource = EmploymentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
