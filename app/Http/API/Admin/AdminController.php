<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if(!Auth::check()){
            return view('admin.register');
        }else{
            return view('admin.home');
        }
    }

    public function addAdmin(){
        return view('admin.register');
    }

    public function create(Request $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'phone' => $request['phone'],
            'role' => 'Admin',
        ]);
        return view('admin.home');
    }
}
