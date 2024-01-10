<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;
use Filament\Support\Enums\Alignment;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
    public static string | Alignment $formActionsAlignment = Alignment::Right;

//    protected function getCreateFormAction(): Action
//    {
//        return parent::getCreateFormAction()->label('Save');
//    }

    protected function getCreateAnotherFormAction(): Action
    {
        return parent::getCreateAnotherFormAction()->label('Create Another');
    }
}
