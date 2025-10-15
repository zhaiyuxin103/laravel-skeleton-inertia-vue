<?php

declare(strict_types=1);

namespace App\Enums;

use Jiannei\Enum\Laravel\Support\Traits\EnumEnhance;

enum GenderEnum: int
{
    use EnumEnhance;

    case MALE    = 1;
    case FEMALE  = 2;
    case UNKNOWN = 3;
}
