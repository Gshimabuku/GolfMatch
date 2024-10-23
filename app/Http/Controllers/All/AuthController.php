<?php

namespace App\Http\Controllers\All;

use App\Dto\Auth\LoginDistributorDto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Enums\Common\SessionEnum;
use App\Dto\Auth\LoginStaffDto;
use App\Enums\Code\RoleType;
use App\Http\Controllers\StaffController;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

use function Laravel\Prompts\alert;

/**
 * 認証 Controller
 */
class AuthController extends StaffController
{
    /**
     * ログイン画面
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        //
        return view('pages.login');
    }

    /**
     * ログイン
     *
     * @param Request $request
     * @return void
     */
    public function login(FormRequest $request)
    {
        //------------------------------------------------------------------------------------------
        // 初期処理（一旦、セッションをクリアしておく）
        //------------------------------------------------------------------------------------------
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        //------------------------------------------------------------------------------------------
        // 認証判定
        //------------------------------------------------------------------------------------------
        $userInfo = [
            'login_id' => $request->input('login_id'),
            'password' => $request->input('password'),
        ];

        if (!Auth::attempt($userInfo)) {
            return redirect()->back();
        }
        //------------------------------------------------------------------------------------------
        // ユーザー情報を取得
        //------------------------------------------------------------------------------------------
        $request->session()->regenerate(); // セッション初期化
        $user = User::where('login_id', $userInfo['login_id'])->first();

        //------------------------------------------------------------------------------------------
        // 権限ごとのホーム画面へ
        //------------------------------------------------------------------------------------------
        if ($user->role == RoleType::ADMIN->value) {
            // Staffとして再ログイン
            Auth::logout();
            session()->invalidate();
            session()->regenerateToken();
            Auth::guard('web')->login($user);
            $request->session()->regenerate(); // セッション初期化

            $loginInfo = new LoginStaffDto();
            $loginInfo->userId = $user->id;
            $loginInfo->loginId = $user->login_id;
            Session::put('login.staff', $loginInfo);

            return redirect()->route('staff.home');
        } else if ($user->role == RoleType::LOGIN->value) {
            // Distributorとして再ログイン
            Auth::logout();
            session()->invalidate();
            session()->regenerateToken();
            Auth::guard('distributor')->login($user);
            $request->session()->regenerate(); // セッション初期化

            $loginInfo = new LoginDistributorDto();
            $loginInfo->userId = $user->id;
            $loginInfo->loginId = $user->login_id;
            Session::put('login.distributor', $loginInfo);

            return redirect()->route('distributor.home');
        }
    }

    /**
     * 自動ログイン
     *
     * @param Request $request
     * @return void
     */
    public function auto(FormRequest $request)
    {
        //------------------------------------------------------------------------------------------
        // 初期処理（一旦、セッションをクリアしておく）
        //------------------------------------------------------------------------------------------
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        //------------------------------------------------------------------------------------------
        // 認証判定
        //------------------------------------------------------------------------------------------
        $user = User::where('auto_login_id', $request->route('uuid'))->first();
        if (empty($user)) {
            return redirect()->route('auth.index');
        }
        if ($user->role == RoleType::ADMIN->value) {
            // Staff
            Auth::login($user); //  ログイン

            $request->session()->regenerate(); // セッション初期化

            $loginInfo = new LoginStaffDto();
            $loginInfo->userId = $user->id;
            $loginInfo->loginId = $user->login_id;
            Session::put('login.staff', $loginInfo);

            return redirect()->route('staff.home');
        } else if ($user->role == RoleType::LOGIN->value) {
            // Distributor
            Auth::guard('distributor')->login($user);

            $request->session()->regenerate(); // セッション初期化

            $loginInfo = new LoginDistributorDto();
            $loginInfo->userId = $user->id;
            $loginInfo->loginId = $user->login_id;
            Session::put('login.distributor', $loginInfo);

            return redirect()->route('distributor.home');
        }
    }

    /**
     * ログアウト
     *
     * @param Request $request
     * @return void
     */
    public function logout(Request $request)
    {
        //------------------------------------------------------------------------------------------
        // 初期処理
        //------------------------------------------------------------------------------------------
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        //------------------------------------------------------------------------------------------
        // 画面表示
        //------------------------------------------------------------------------------------------
        return redirect()->route('index');
    }
}
