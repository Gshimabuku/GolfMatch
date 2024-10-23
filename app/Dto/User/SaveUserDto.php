<?php

namespace App\Dto\User;

/**
 * ユーザー情報保存Dto
 */
class SaveUserDto
{
    /** ログインID */
    public $loginId;

    /** パスワード */
    public $password;

    /** ユーザー名 */
    public $userName;

    /** 自動ログインID */
    public $autoLoginId;
}
