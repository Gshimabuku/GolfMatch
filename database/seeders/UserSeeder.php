<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 管理者ユーザー情報
        DB::table("users")->insert(
            [
                [
                    'login_id' => 'admin',
                    'password' => bcrypt('admin'),
                    'auto_login_id' => Str::uuid(),
                    'user_name' => '管理者',
                    'role' => '1',
                ],
                [
                    'login_id' => 'sample',
                    'password' => bcrypt('pass'),
                    'auto_login_id' => Str::uuid(),
                    'user_name' => 'sample',
                    'role' => '2',
                ],
                [
                    'login_id' => 'roronoa',
                    'password' => bcrypt('iopHwy1@'),
                    'auto_login_id' => Str::uuid(),
                    'user_name' => 'shimabuku',
                    'role' => '2',
                ],
            ]
        );
    }
}
