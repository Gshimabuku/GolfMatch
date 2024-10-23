<?php

namespace App\Enums\Code;

/**
 * 所在地エリアタイプタイプ
 */
enum LocationAreaType: string
{
    /** 北部 */
    case NORTH = '1';
    /** 中部 */
    case MIDDLE = '2';
    /** 南部 */
    case SOUTH = '3';
    /** 離島 */
    case OUT_ISLAND = '4';
    /** 県外 */
    case OUTSIDE = '5';

    /**
     * ラベル取得
     */
    public function label()
    {
        return match ($this) {
            self::NORTH => "北部",
            self::MIDDLE => "中部",
            self::SOUTH => "南部",
            self::OUT_ISLAND => "離島",
            self::OUTSIDE => "県外",
        };
    }
}
