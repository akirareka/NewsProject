<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()

    {
        $id = Auth::id();
        $user = User::where('id',$id)->get();
        return view ("profile.view", compact("user"));
    }

    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);

        $user = User::findOrFail($request->id);
        if($request->file('photo') == ""){
            $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            ]);
        }else{
            if ($request->hasfile('photo')) {            
                $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('photo')->getClientOriginalName());
                $request->file('photo')->move(public_path('images'), $filename);
            }
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'phone' => $request->phone,
                'tgl_lahir' => $request->tgl_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'photo' => $filename,
            ]);

        }
        return redirect()->to('/profile');
    }
}