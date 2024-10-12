<?php

namespace App\Http\Controllers\All;

use App\Http\Controllers\AllController;
use Illuminate\Http\Request;

/**
 * ログイン画面
 */
class IndexController extends AllController
{
    /**
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        //------------------------------------------------------------------------------------------
        // ログイン画面へ
        //------------------------------------------------------------------------------------------
        return redirect()->route('login.index');
    }
}
