<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * コースヤードモデル
 */
class Course_yardage extends Model
{
    use HasFactory;

    /**
     * テーブル名
     */
    protected $table = 'course_yardages';

    /**
     * 主キー
     */
    protected $primaryKey = 'course_yardage_id';

    /**
     * 複数代入可能カラム
     */
    protected $fillable = [
        'course_yardage_title_id',
        'hole_id',
        'yardage',
    ];
}
