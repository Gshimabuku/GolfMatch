<?php
namespace App\Enums;

/**
 * コースタイプ
 */
enum CourseType: string
{
    /** ショート */
    case SHORT = '1';
    /** ミドル */
    case MIDDLE = '2';
    /** ロング */
    case LONG = '3';

    /**
     * ラベル取得
     */
    public function label()
    {
        return match ($this) {
            self::SHORT => "ショート",
            self::MIDDLE => "ミドル",
            self::LONG => "ロング",
        };
    }
}
