<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CourseYardageTitleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table("course_yardage_titles")->insert(
            [
                [
                    'course_id' => '1',
                    'course_yardage_title_name' => 'Back',
                ],
                [
                    'course_id' => '1',
                    'course_yardage_title_name' => 'Regular',
                ],
                [
                    'course_id' => '1',
                    'course_yardage_title_name' => 'Ladies',
                ],
            ]
        );
    }
}
