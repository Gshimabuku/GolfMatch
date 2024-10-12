<?php

namespace App\Http\Controllers\All\Staff;

use App\Http\Controllers\StaffController;
use Illuminate\Http\Request;

/**
 * スタッフ - HOME
 */
class IndexController extends StaffController
{
    /**
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        // STAFF HOME
        return view('pages.staff.index');
    }

}
