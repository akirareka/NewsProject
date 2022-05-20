<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Artikel;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikelsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::check()){
            if(Auth::user()->role == 'Admin'){
                $artikel = Artikel::latest()->paginate(10);
                return view('admin.artikel.show',compact('artikel'))
                ->with('i', (request()->input('page', 1) - 1) * 10);
            }else{
                return redirect()->to('home')
                        ->with('error', 'Anda tidak memiliki akses');
            }
        }else{
            return view('auth.login')
                        ->with('error', 'Mohon login terlebih dahulu');
        }
    }
    public function create()
    {
        return view('admin.artikel.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'author' => 'required',
            'isi_artikel' => 'required',
            'category' => 'required',
            'ringkasan' => 'required',
            'foto' => 'required',
        ]);
        if ($request->hasfile('foto')) {            
            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('foto')->getClientOriginalName());
            $request->file('foto')->move(public_path('images'), $filename);
        }
        Artikel::create([
            'judul' => $request->judul,
            'category' => $request->category,
            'author' => $request->author,
            'isi_artikel' => $request->isi_artikel,
            'ringkasan' => $request->ringkasan,
            'foto'=>$filename,
        ]);
        return redirect()->to('admin/artikel');
    }
    
    public function edit($id)
    {
        $artikel = Artikel::where('id',$id)->first();
        return view('admin.artikel.edit', compact('artikel'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'author' => 'required',
            'isi_artikel' => 'required',
            'category' => 'required',
            'ringkasan' => 'required',
        ]);

        $artikel = Artikel::findOrFail($request->id);
        if($request->file('foto') == ""){
            $artikel->update([
            'judul' => $request->judul,
            'category' => $request->category,
            'author' => $request->author,
            'isi_artikel' => $request->isi_artikel,
            'ringkasan' => $request->ringkasan,
            ]);
        }else{
            $foto = $request->file('foto');
            $foto->storeAs('/article/img', $foto->hashName(), 'public');

            $artikel->update([
                'judul' => $request->judul,
                'category' => $request->category,
                'author' => $request->author,
                'isi_artikel' => $request->isi_artikel,
                'foto' => $foto->hashName(),
                'ringkasan' => $request->ringkasan,
            ]);
        }
        return redirect()->to('admin/artikel');
    }

    public function destroy($id)
    {
        $post = Artikel::findOrFail($id);
        $post->delete();
        return redirect()->to('admin/artikel');
    }
}