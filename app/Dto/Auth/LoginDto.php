<?php

namespace App\Dto\Auth;

/**
 * ログイン情報Dto
 */
abstract class LoginDto
{
    /** ユーザーID */
    public $userId;

    /** ログインID */
    public $loginId;

    /** ログイン名 */
    public $loginName;
}
