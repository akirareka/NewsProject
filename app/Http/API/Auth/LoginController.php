<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
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
    Use AuthenticatesUsers;

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
        $this->middleware('guest')->except('logout');
    }

//     public function login(Request $request)
//     {
//         $data = [
//             'email' => $request->email,
//             'password' => $request->password,
//         ];
//         if (Auth::attempt($data, $remember)) {
//             Auth::logoutOtherDevices($request->password);
//             if(Auth::user()->role == 'User'){
//                 return view('home');
//             }else if(Auth::user()->role == 'Doctor'){
//                 return view('doctor.home');
//             }else if(Auth::user()->role == 'Admin'){
//                 return view('admin.home');
//             }
//         }
//         return view('auth.login');
//     }

//     public function showLoginForm()
//     {
//         return view('auth.login');
//     }
    }