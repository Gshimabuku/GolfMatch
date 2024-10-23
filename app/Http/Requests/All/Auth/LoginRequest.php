<?php

namespace App\Http\Requests\All\Auth;

use App\Dto\User\SaveUserDto;
use App\Http\Requests\AllRequest;

/**
 * ログイン Request
 */
class LoginRequest extends AllRequest
{
    /**
     * コンストラクタ
     */
    public function __construct(
    ) {
    }

    /**
     * validationのルール定義
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // ログインID
            'login_id' => ['required'],
            // パスワード
            'password' => ['required'],
        ];
    }

    /**
     * リクエスト情報からDTO生成
     *
     * @return SaveUserDto
     */
    public function getDto()
    {
        // 販売店登録Dto
        $ret = new SaveUserDto();
        // ログインID
        $ret->loginId = $this->input('login_id');
        // パスワード
        $ret->password = bcrypt($this->input('password'));
        // Dto返却
        return $ret;
    }
}
