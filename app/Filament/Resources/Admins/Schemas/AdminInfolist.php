<?php

declare(strict_types=1);

namespace App\Filament\Resources\Admins\Schemas;

use App\Models\Admin;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AdminInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('alias')
                    ->placeholder('-'),
                TextEntry::make('email'),
                TextEntry::make('email_verified_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('phone')
                    ->placeholder('-'),
                ImageEntry::make('avatar')
                    ->placeholder('-'),
                TextEntry::make('gender')
                    ->badge(),
                TextEntry::make('birthday')
                    ->date()
                    ->placeholder('-'),
                TextEntry::make('age')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('introduction')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('notification_count')
                    ->numeric(),
                TextEntry::make('last_authed_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('last_actived_at')
                    ->dateTime()
                    ->placeholder('-'),
                IconEntry::make('state')
                    ->boolean(),
                TextEntry::make('sort')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (Admin $record): bool => $record->trashed()),
            ]);
    }
}
