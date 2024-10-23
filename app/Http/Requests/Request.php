<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * ビジネスツール共通FormRequest
 */
abstract class Request extends FormRequest
{
    /**
     * 認証の確認（本FormRequestではtrue固定）
     */
    public function authorize(): bool
    {
        return true;
    }


}
