<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table("courses")->insert(
            [
                [
                    'course_name' => 'かねひで喜瀬カントリークラブ',
                    'course_kana' => 'カネヒデキセカントリークラブ',
                    'location_id' => '7',
                    'address' => '沖縄県 名護市 喜瀬 1107-1',
                    'course_type' => '3',
                    'course_par' => '72',
                ],
            ]
        );
    }
}
