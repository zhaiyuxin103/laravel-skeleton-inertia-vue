<?php

declare(strict_types=1);

namespace App\Filament\Resources\Admins\Schemas;

use App\Enums\GenderEnum;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AdminForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('last_name')
                    ->required(),
                TextInput::make('first_name')
                    ->required(),
                TextInput::make('last_alias'),
                TextInput::make('first_alias'),
                TextInput::make('email')
                    ->email()
                    ->required(),
                DateTimePicker::make('email_verified_at'),
                TextInput::make('phone')
                    ->tel(),
                TextInput::make('password')
                    ->password()
                    ->required(),
                FileUpload::make('avatar'),
                Select::make('gender')
                    ->options(GenderEnum::class)
                    ->default(GenderEnum::UNKNOWN)
                    ->required(),
                DatePicker::make('birthday'),
                Textarea::make('introduction')
                    ->columnSpanFull(),
                Toggle::make('state')
                    ->required()
                    ->default(true),
                TextInput::make('sort')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
