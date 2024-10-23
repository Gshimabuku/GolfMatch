<?php

namespace App\Http\Requests\All\Auth;

use App\Dto\User\SaveUserDto;
use App\Http\Requests\AllRequest;

/**
 * ユーザー新規登録 Request
 */
class SaveRequest extends AllRequest
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
            'login_id' => ['required', 'max:50', 'unique:users,login_id'],
            // ユーザー名
            'user_name' => ['required', 'max:20'],
            // パスワード
            'password' => ['required','confirmed', 'max:20'],
        ];
    }

    /**
     * validationのメッセージ定義
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function messages(): array
    {
        return [
            // ログインID
            'login_id.max' => 'ログインIDは50文字以内です',
            'login_id.unique' => 'このユーザーIDは使用されています',
            // ユーザー名
            'user_name.max' => 'ユーザー名は20文字以内です',
            // パスワード
            'password.confirmed' => 'パスワードが一致しません',
            'password.max' => 'パスワードは20文字以内です',
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
        $ret->password = $this->input('password');
        // ユーザー名
        $ret->userName = $this->input('user_name');
        // Dto返却
        return $ret;
    }
}
