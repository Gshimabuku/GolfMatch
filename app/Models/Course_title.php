<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *コースタイトルモデル
 */
class Course_title extends Model
{
    use HasFactory;

    /**
     * テーブル名
     */
    protected $table = 'course_titles';

    /**
     * 主キー
     */
    protected $primaryKey = 'course_title_id';

    /**
     * 複数代入可能カラム
     */
    protected $fillable = [
        'course_id',
        'course_title_name',
    ];
}
