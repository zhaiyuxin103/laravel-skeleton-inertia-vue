<?php

declare(strict_types=1);

use App\Enums\GenderEnum;

return [
    GenderEnum::class => [
        GenderEnum::MALE->name    => '男',
        GenderEnum::FEMALE->name  => '女',
        GenderEnum::UNKNOWN->name => '未知',
    ],
];
