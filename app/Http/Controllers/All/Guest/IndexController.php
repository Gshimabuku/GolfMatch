<?php

namespace App\Http\Controllers\All\Guest;

use App\Http\Controllers\GuestController;
use Illuminate\Http\Request;

/**
 * ゲストユーザー - HOME
 */
class IndexController extends GuestController
{
    /**
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        // GUEST HOME
        return view('pages.guest.index');
    }

}
