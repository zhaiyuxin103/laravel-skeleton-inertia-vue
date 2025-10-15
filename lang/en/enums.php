<?php

declare(strict_types=1);

use App\Enums\GenderEnum;

return [
    GenderEnum::class => [
        GenderEnum::MALE->name    => 'Male',
        GenderEnum::FEMALE->name  => 'Female',
        GenderEnum::UNKNOWN->name => 'Unknown',
    ],
];
