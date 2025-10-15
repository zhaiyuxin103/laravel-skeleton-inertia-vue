<?php

declare(strict_types=1);

namespace App\Filament\Resources\Admins\Tables;

use App\Enums\GenderEnum;
use App\Models\Admin;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class AdminsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('index')
                    ->rowIndex()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('id')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('name')
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('alias')
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('email')
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('phone')
                    ->searchable()
                    ->toggleable(),
                ImageColumn::make('avatar')
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('gender')
                    ->badge()
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('birthday')
                    ->date()
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('age')
                    ->numeric()
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('last_authed_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('last_actived_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(),
                IconColumn::make('state')
                    ->boolean()
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('sort')
                    ->numeric()
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('id')
                    ->searchable()
                    ->options(Admin::all()->pluck('id', 'id')),
                SelectFilter::make('name')
                    ->searchable()
                    ->options(Admin::all()->pluck('name', 'id')),
                SelectFilter::make('alias')
                    ->searchable()
                    ->options(Admin::all()->pluck('alias', 'id')),
                SelectFilter::make('email')
                    ->searchable()
                    ->options(Admin::all()->pluck('email', 'id')),
                SelectFilter::make('phone')
                    ->searchable()
                    ->options(Admin::all()->pluck('phone', 'id')),
                SelectFilter::make('gender')
                    ->searchable()
                    ->options(GenderEnum::class),
                TernaryFilter::make('state'),
                TrashedFilter::make(),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
