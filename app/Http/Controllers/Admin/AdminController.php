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
        if(Auth::user()->role == 'Admin'){
            return view('admin.home');
        }else {
            return redirect()->to('home')
            ->with('error', 'Anda tidak memiliki akses');
        }
    }

    public function addAdmin(){
        if(Auth::user()->role == 'Admin'){
            return view('admin.register');
        }else {
            return redirect()->to('home')
            ->with('error', 'Anda tidak memiliki akses');
        }
    }

    public function showMasukan(){
        if(Auth::user()->role == 'Admin'){
            $masukan= DB::table('masukan')
            ->join('users', 'users.id', '=', 'masukan.user_id')
            ->join('artikels', 'artikels.id', '=', 'masukan.artikel_id')
            ->select('masukan.*','users.name as user_name','users.email as user_email','artikels.judul as artikel_judul')
            ->get();
            return view('admin.masukan',['masukan'=>$masukan]);
        }else {
            return redirect()->to('home')
            ->with('error', 'Anda tidak memiliki akses');
        }
    }

    public function create(Request $request)
    {
        if(Auth::user()->role == 'Admin'){
            User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'phone' => $request['phone'],
                'role' => 'Admin',
            ]);
            return view('admin.home');
        }else {
            return redirect()->to('home')
            ->with('error', 'Anda tidak memiliki akses');
        }
    }
}
