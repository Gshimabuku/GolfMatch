<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // ユーザー情報
        $this->call(UserSeeder::class);
        // 所在地情報
        $this->call(LocationSeeder::class);
        // コース情報
        $this->call(CourseSeeder::class);
        // コースタイトル情報
        $this->call(CourseTitleSeeder::class);
        // コースヤードタイトル情報
        $this->call(CourseYardageTitleSeeder::class);
        // ホール情報
        $this->call(HoleSeeder::class);
        // コースヤード情報
        $this->call(CourseYardageSeeder::class);
        // フレンド情報
        $this->call(FriendSeeder::class);
    }
}
