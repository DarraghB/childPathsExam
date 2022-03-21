<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('getLogout');
    }

    public function getLogin(){
        return view('auth.login');
    }

    public function postLogin(Request $request, User $user){
        $user = $user->whereEmail($request->email)->first();
        
        if(Hash::check($request->password, $user->password)) {
            Auth::loginUsingId($user->id);
        }else{
            return redirect()->back()->withErrors([
            'log_message' => 'login failed',
        ]);
        }
    

        return redirect()->to('posts/index')->with('success', 'your message,here');
    }

    public function getLogout() {
        Auth::logout();

        return redirect()->to('auth/login')->with([
            'log_message' => 'logout success!',
        ]);
        
}
}
