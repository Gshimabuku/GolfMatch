<?php

namespace App\Enums;

/**
 * オリンピックタイプ
 */
enum OlympicType: string
{
    /** なし */
    case NOT = '1';
    /** ダイヤ */
    case DIAMOND = '2';
    /** 金 */
    case GOLD = '3';
    /** 銀 */
    case SILVER = '4';
    /** 銅 */
    case METAL = '5';
    /** 鉄 */
    case IRON = '6';

    /**
     * ラベル取得
     */
    public function label()
    {
        return match ($this) {
            self::NOT => 'なし',
            self::DIAMOND => 'ダイヤ',
            self::GOLD => '金',
            self::SILVER => '銀',
            self::METAL => '銅',
            self::IRON => '鉄',
        };
    }
}
