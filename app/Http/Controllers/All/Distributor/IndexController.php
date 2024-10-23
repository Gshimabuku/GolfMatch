<?php

namespace App\Http\Controllers\All\Distributor;

use App\Http\Controllers\DistributorController;
use Illuminate\Http\Request;

/**
 * ログインユーザー - HOME
 */
class IndexController extends DistributorController
{
    /**
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        // DISTRIBUTOR HOME
        return view('pages.distributor.index');
    }

}
