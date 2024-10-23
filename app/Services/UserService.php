<?php

namespace App\Services;

use App\Dto\User\SaveUserDto;

/**
 * ユーザーService
 */
interface UserService
{
    /**
     * 新規ユーザー登録
     *
     * @param SaveUserDto $saveUserDto 新規ユーザー情報
     * @return void
     */
    public function save(SaveUserDto $saveUserDto);
}
