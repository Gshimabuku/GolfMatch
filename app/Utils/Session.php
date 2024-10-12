<?php
namespace App\Utils;

use Illuminate\Support\Facades\Session;
use App\Enums\Eibt\SessionEnum;
use App\Enums\Code\EsLanguageCode;

/**
 * ビジネスツールのセッションUtil
 */
class EibtSession
{
    /**
     * セッションの存在確認
     */
    public static function has(SessionEnum $sessionId)
    {
        return Session::has($sessionId->value);
    }

    /**
     * セッションの値取得
     */
    public static function get(SessionEnum $sessionId)
    {
        return Session::get($sessionId->value);
    }

    /**
     * セッションの設定
     */
    public static function put(SessionEnum $sessionId, $value)
    {
        Session::put($sessionId->value, $value);
    }

    /**
     * セッションの設定（Request単位）
     */
    public static function flash(SessionEnum $sessionId, $value)
    {
        Session::flash($sessionId->value, $value);
    }

    /**
     * セッションの値比較
     */
    public static function equals(SessionEnum $sessionId, $value)
    {
        if (!EibtSession::has($sessionId)) {
            return false;
        }
        if (EibtSession::get($sessionId) != $value) {
            return false;
        }
        return true;
    }

    /**
     * 「言語切り替え」の状況からES言語コードを取得
     *
     *  @return EsLanguageCode
     */
    public static function getEsLanguageCode()
    {
        $locale = self::get(SessionEnum::EIBT_LOCALE);
        if (empty($locale)) {
            return EsLanguageCode::ENGLISH;
        }
        $ret = EsLanguageCode::tryFrom($locale);
        if (empty($ret)) {
            return EsLanguageCode::ENGLISH;
        }
        return $ret;
    }
}
