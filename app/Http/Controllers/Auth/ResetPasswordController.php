<?php
/*
 * @Author: DanceLynx
 * @Description: 密码重置控制器
 * @Date: 2020-06-20 16:58:26
 */

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function sendResetResponse(\Illuminate\Http\Request $request, $response)
    {
        $request->session()->flash('success', '密码重置成功');
        return redirect($this->redirectPath());
    }
}
