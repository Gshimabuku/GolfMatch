<?php

namespace App\Enums\Code;

/**
 * 権限タイプ
 */
enum RoleType: string
{
    /** 管理者 */
    case ADMIN = '1';
    /** 登録ユーザー */
    case LOGIN = '2';
    /** ゲストユーザー */
    case GUEST = '3';

    /**
     * ラベル取得
     */
    public function label()
    {
        return match ($this) {
            self::ADMIN => "管理者",
            self::LOGIN => "登録ユーザー",
            self::GUEST => "ゲストユーザー",
        };
    }
}
