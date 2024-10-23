<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * オリンピック設定タイプモデル
 */
class Olympic_setting_type extends Model
{
    use HasFactory;

    /**
     * テーブル名
     */
    protected $table = 'olympic_setting_types';

    /**
     * 主キー
     */
    protected $primaryKey = 'olympic_setting_type_id';

    /**
     * 複数代入可能カラム
     */
    protected $fillable = [
        'group_id',
        'olympic_type',
        'point',
    ];
}
