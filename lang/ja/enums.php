<?php

declare(strict_types=1);

use App\Enums\GenderEnum;

return [
    GenderEnum::class => [
        GenderEnum::MALE->name    => '男性',
        GenderEnum::FEMALE->name  => '女性',
        GenderEnum::UNKNOWN->name => '不明',
    ],
];
