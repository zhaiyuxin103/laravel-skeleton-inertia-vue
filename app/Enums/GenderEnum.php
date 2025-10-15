<?php

declare(strict_types=1);

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Jiannei\Enum\Laravel\Support\Traits\EnumEnhance;

enum GenderEnum: int implements HasColor, HasIcon, HasLabel
{
    use EnumEnhance;

    case MALE    = 1;
    case FEMALE  = 2;
    case UNKNOWN = 3;

    public function getLabel(): string
    {
        return $this->description();
    }

    public function getColor(): ?string
    {
        return match ($this) {
            self::MALE    => 'primary',
            self::FEMALE  => 'pink',
            self::UNKNOWN => 'secondary',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::MALE    => 'heroicon-o-user',
            self::FEMALE  => 'heroicon-o-user-minus',
            self::UNKNOWN => 'heroicon-o-question-mark-circle',
        };
    }
}
