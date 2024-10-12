<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FriendSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table("friends")->insert(
            [
                [
                    'main_user_id' => '2',
                    'friend_user_id' => '3',
                    'un_follow' => '0',
                ],
                [
                    'main_user_id' => '3',
                    'friend_user_id' => '2',
                    'un_follow' => '1',
                ],
            ]
        );
    }
}
