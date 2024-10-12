<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table("locations")->insert(
            [
                [
                    'location_name' => '国頭村',
                    'location_kana' => 'Kunigamison',
                    'location_area_type' => '1',
                ],
                [
                    'location_name' => '大宜味村',
                    'location_kana' => 'Ogimison',
                    'location_area_type' => '1',
                ],
                [
                    'location_name' => '東村',
                    'location_kana' => 'Higashison',
                    'location_area_type' => '1',
                ],
                [
                    'location_name' => '伊江村',
                    'location_kana' => 'Ieson',
                    'location_area_type' => '1',
                ],
                [
                    'location_name' => '今帰仁村',
                    'location_kana' => 'Nakijinson',
                    'location_area_type' => '1',
                ],
                [
                    'location_name' => '本部町',
                    'location_kana' => 'Motobucho',
                    'location_area_type' => '1',
                ],
                [
                    'location_name' => '名護市',
                    'location_kana' => 'Nagoshi',
                    'location_area_type' => '1',
                ],
                [
                    'location_name' => '宜野座村',
                    'location_kana' => 'Ginozason',
                    'location_area_type' => '1',
                ],
                [
                    'location_name' => '恩納村',
                    'location_kana' => 'Onnason',
                    'location_area_type' => '1',
                ],
                [
                    'location_name' => '金武町',
                    'location_kana' => 'Kincho',
                    'location_area_type' => '1',
                ],
                [
                    'location_name' => '読谷村',
                    'location_kana' => 'Yomitanson',
                    'location_area_type' => '2',
                ],
                [
                    'location_name' => '嘉手納町',
                    'location_kana' => 'Kadenacho',
                    'location_area_type' => '2',
                ],
                [
                    'location_name' => 'うるま市',
                    'location_kana' => 'Urumashi',
                    'location_area_type' => '2',
                ],
                [
                    'location_name' => '沖縄市',
                    'location_kana' => 'Okinawashi',
                    'location_area_type' => '2',
                ],
                [
                    'location_name' => '北中城村',
                    'location_kana' => 'Kitanakagususon',
                    'location_area_type' => '2',
                ],
                [
                    'location_name' => '中城村',
                    'location_kana' => 'Nakagususon',
                    'location_area_type' => '2',
                ],
                [
                    'location_name' => '北谷町',
                    'location_kana' => 'Chatanch',
                    'location_area_type' => '2',
                ],
                [
                    'location_name' => '宜野湾市',
                    'location_kana' => 'Ginowanshi',
                    'location_area_type' => '2',
                ],
                [
                    'location_name' => '浦添市',
                    'location_kana' => 'Uraseshi',
                    'location_area_type' => '2',
                ],
                [
                    'location_name' => '西原町',
                    'location_kana' => 'Nishiharacho',
                    'location_area_type' => '2',
                ],
                [
                    'location_name' => '与那原町',
                    'location_kana' => 'Yonabarucho',
                    'location_area_type' => '3',
                ],
                [
                    'location_name' => '那覇市',
                    'location_kana' => 'Nahashi',
                    'location_area_type' => '3',
                ],
                [
                    'location_name' => '豊見城市',
                    'location_kana' => 'Tomigusukushi',
                    'location_area_type' => '3',
                ],
                [
                    'location_name' => '南風原町',
                    'location_kana' => 'Haebarucho',
                    'location_area_type' => '3',
                ],
                [
                    'location_name' => '南城市',
                    'location_kana' => 'Nanjoshi',
                    'location_area_type' => '3',
                ],
                [
                    'location_name' => '八重瀬町',
                    'location_kana' => 'Yaesecho',
                    'location_area_type' => '3',
                ],
                [
                    'location_name' => '糸満市',
                    'location_kana' => 'Itomanshi',
                    'location_area_type' => '3',
                ],
                [
                    'location_name' => '石垣市',
                    'location_kana' => 'Ishigakishi',
                    'location_area_type' => '4',
                ],
                [
                    'location_name' => '宮古島市',
                    'location_kana' => 'Miyakojimashi',
                    'location_area_type' => '4',
                ],

                // [
                //     'location_name' => '',
                //     'location_kana' => '',
                //     'location_area_type' => '4',
                // ],
                // [
                //     'location_name' => '',
                //     'location_kana' => '',
                //     'location_area_type' => '4',
                // ],
                // [
                //     'location_name' => '',
                //     'location_kana' => '',
                //     'location_area_type' => '4',
                // ],
                // [
                //     'location_name' => '',
                //     'location_kana' => '',
                //     'location_area_type' => '4',
                // ],
                // [
                //     'location_name' => '',
                //     'location_kana' => '',
                //     'location_area_type' => '4',
                // ],
                // [
                //     'location_name' => '',
                //     'location_kana' => '',
                //     'location_area_type' => '4',
                // ],
                // [
                //     'location_name' => '',
                //     'location_kana' => '',
                //     'location_area_type' => '4',
                // ],
                // [
                //     'location_name' => '',
                //     'location_kana' => '',
                //     'location_area_type' => '4',
                // ],
                // [
                //     'location_name' => '',
                //     'location_kana' => '',
                //     'location_area_type' => '4',
                // ],
                // [
                //     'location_name' => '',
                //     'location_kana' => '',
                //     'location_area_type' => '4',
                // ],
            ]
        );
    }
}
