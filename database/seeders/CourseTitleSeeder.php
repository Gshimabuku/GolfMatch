<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CourseTitleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table("course_titles")->insert(
            [
                [
                    'course_id' => '1',
                    'course_title_name' => 'オーシャン',
                ],
                [
                    'course_id' => '1',
                    'course_title_name' => 'ウッズ',
                ],
            ]
        );
    }
}
