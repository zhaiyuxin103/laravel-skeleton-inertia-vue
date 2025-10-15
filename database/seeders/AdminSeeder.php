<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\GenderEnum;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin              = new Admin;
        $admin->last_name   = 'YuXin';
        $admin->first_name  = 'Zhai';
        $admin->last_alias  = 'yuxin';
        $admin->first_alias = 'zhai';
        $admin->email       = 'zhaiyuxin103@gmail.com';
        $admin->phone       = '19035998022';
        $admin->password    = Hash::make('Aa@123321');
        $admin->birthday    = '1996-10-03';
        $admin->gender      = GenderEnum::MALE;
        $admin->save();
    }
}
