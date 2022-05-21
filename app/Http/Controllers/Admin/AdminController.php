<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function showMasukan(){
        $masukan= DB::table('masukan')
        ->join('users', 'users.id', '=', 'masukan.user_id')
        ->select('masukan.isi_pesan','users.name as user_name','users.email as user_email')
        ->get();
        return view('admin.masukan',['masukan'=>$masukan]);
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
