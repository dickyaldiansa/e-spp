<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        $data['page_title'] = 'Login Siswa';
        $data['login_route'] = 'login';
        $data['username_placeholder'] = 'NIS / E-Mail';
        $data['forgot_password_route'] = 'password.request';
        return view('auth.login', $data);
    }

    public function username()
    {
       $login = request()->input('login');
       $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
       request()->merge([$field => $login]);
       return $field;
   }
}
