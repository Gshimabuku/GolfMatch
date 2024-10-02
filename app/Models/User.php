<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * ユーザーモデル
 */
class User extends Model
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
        'username',
        'role',
    ];
}
