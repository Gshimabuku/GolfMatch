<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * ユーザーモデル
 */
class User extends Authenticatable
{
    use HasFactory;

    /**
     * テーブル名
     */
    protected $table = 'users';

    /**
     * 主キー
     */
    protected $primaryKey = 'user_id';

    /**
     * 複数代入可能カラム
     */
    protected $fillable = [
        'login_id',
        'password',
        'auto_login_id',
        'username',
        'role',
    ];
}
