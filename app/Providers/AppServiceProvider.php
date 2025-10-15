<?php

declare(strict_types=1);

namespace App\Providers;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ToggleButtons;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        TextColumn::configureUsing(function (TextColumn $textColumn): void {
            $textColumn->translateLabel();
        });
        SelectColumn::configureUsing(function (SelectColumn $selectColumn): void {
            $selectColumn->translateLabel();
        });
        IconColumn::configureUsing(function (IconColumn $iconColumn): void {
            $iconColumn->translateLabel();
        });
        ImageColumn::configureUsing(function (ImageColumn $imageColumn): void {
            $imageColumn->translateLabel();
        });

        TextInput::configureUsing(function (TextInput $textInput): void {
            $textInput->translateLabel();
        });
        Select::configureUsing(function (Select $select): void {
            $select->translateLabel()->native(false);
        });
        Textarea::configureUsing(function (Textarea $textarea): void {
            $textarea->translateLabel();
        });
        Toggle::configureUsing(function (Toggle $toggle): void {
            $toggle->translateLabel()->inline(false);
        });
        ToggleButtons::configureUsing(function (ToggleButtons $toggleButtons): void {
            $toggleButtons->translateLabel();
        });
        RichEditor::configureUsing(function (RichEditor $richEditor): void {
            $richEditor->translateLabel();
        });
        FileUpload::configureUsing(function (FileUpload $fileUpload): void {
            $fileUpload->translateLabel();
        });
        DatePicker::configureUsing(function (DatePicker $datePicker): void {
            $datePicker->translateLabel()->native(false);
        });
        TimePicker::configureUsing(function (TimePicker $timePicker): void {
            $timePicker->translateLabel()->native(false);
        });
        DateTimePicker::configureUsing(function (DateTimePicker $dateTimePicker): void {
            $dateTimePicker->translateLabel()->native(false);
        });
        Radio::configureUsing(function (Radio $radio): void {
            $radio->translateLabel();
        });
        ToggleButtons::configureUsing(function (ToggleButtons $toggleButtons): void {
            $toggleButtons->translateLabel()->inline();
        });
        Repeater::configureUsing(function (Repeater $repeater): void {
            $repeater->translateLabel();
        });

        TextEntry::configureUsing(function (TextEntry $textEntry): void {
            $textEntry->translateLabel();
        });
        ImageEntry::configureUsing(function (ImageEntry $imageEntry): void {
            $imageEntry->translateLabel();
        });
        IconEntry::configureUsing(function (IconEntry $iconEntry): void {
            $iconEntry->translateLabel();
        });
    }
}
