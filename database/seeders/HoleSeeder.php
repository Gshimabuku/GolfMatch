<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class HoleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table("holes")->insert(
            [
                [
                    'course_title_id' => '1',
                    'hole_number' => '1',
                    'hole_par' => '4',
                ],
                [
                    'course_title_id' => '1',
                    'hole_number' => '2',
                    'hole_par' => '4'
                ],
                [
                    'course_title_id' => '1',
                    'hole_number' => '3',
                    'hole_par' => '5',
                ],
                [
                    'course_title_id' => '1',
                    'hole_number' => '4',
                    'hole_par' => '4',
                ],
                [
                    'course_title_id' => '1',
                    'hole_number' => '5',
                    'hole_par' => '3',
                ],
                [
                    'course_title_id' => '1',
                    'hole_number' => '6',
                    'hole_par' => '4',
                ],
                [
                    'course_title_id' => '1',
                    'hole_number' => '7',
                    'hole_par' => '4',
                ],
                [
                    'course_title_id' => '1',
                    'hole_number' => '8',
                    'hole_par' => '3'
                ],
                [
                    'course_title_id' => '1',
                    'hole_number' => '9',
                    'hole_par' => '5',
                ],
                [
                    'course_title_id' => '2',
                    'hole_number' => '1',
                    'hole_par' => '4',
                ],
                [
                    'course_title_id' => '2',
                    'hole_number' => '2',
                    'hole_par' => '4'
                ],
                [
                    'course_title_id' => '2',
                    'hole_number' => '3',
                    'hole_par' => '3',
                ],
                [
                    'course_title_id' => '2',
                    'hole_number' => '4',
                    'hole_par' => '4',
                ],
                [
                    'course_title_id' => '2',
                    'hole_number' => '5',
                    'hole_par' => '5',
                ],
                [
                    'course_title_id' => '2',
                    'hole_number' => '6',
                    'hole_par' => '4',
                ],
                [
                    'course_title_id' => '2',
                    'hole_number' => '7',
                    'hole_par' => '4',
                ],
                [
                    'course_title_id' => '2',
                    'hole_number' => '8',
                    'hole_par' => '3'
                ],
                [
                    'course_title_id' => '2',
                    'hole_number' => '9',
                    'hole_par' => '5',
                ],
            ]
        );
    }
}
