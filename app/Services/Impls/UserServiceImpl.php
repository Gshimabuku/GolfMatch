<?php

namespace App\Services\Impls;

use App\Dto\User\SaveUserDto;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Support\Str;

/**
 * ユーザーService
 */
class UserServiceImpl implements UserService
{
    /**
     * @inheritDoc
     */
    public function save(SaveUserDto $saveUserDto)
    {
        // ユーザーテーブル
        $user = new User();
        // ログインID
        $user->login_id = $saveUserDto->loginId;
        // パスワード
        $user->password = bcrypt($saveUserDto->password);
        // 自動ログインID
        $user->auto_login_id = Str::uuid();
        // ユーザー名
        $user->user_name = $saveUserDto->userName;
        // 保存
        $user->save();
    }
}
