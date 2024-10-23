<?php

namespace App\Http\Controllers\All;

use App\Exceptions\ExclusiveException;
use Illuminate\Http\Request;
use App\Http\Controllers\StaffController;
use App\Http\Requests\All\Auth\SaveRequest;
use App\Services\UserService;
use Illuminate\Support\Facades\DB;

/**
 * 新規登録 Controller
 */
class RegisterController extends StaffController
{
    /**
     * コンストラクタ
     *
     * @param UserService $userService ユーザーService
     */
    public function __construct(
        private UserService $userService,
    ) {}

    /**
     * 新規登録画面
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        //
        return view('pages.register');
    }

    /**
     * 新規登録
     *
     * @param SaveRequest $request
     * @return void
     */
    public function new(SaveRequest $request)
    {
        $dto = $request->getDto();
        DB::beginTransaction();
        try {
            $this->userService->save($dto);
            DB::commit();
        } catch (ExclusiveException $e) {
            DB::rollBack();
            return redirect()->back()->withInput();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
        return redirect()->route('auth.index');
    }
}
