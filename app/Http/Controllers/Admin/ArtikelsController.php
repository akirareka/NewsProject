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
    public function index()
    {
        if(Auth::check()){
            if(Auth::user()->role == 'Admin'){
                $artikel = Artikel::latest()->paginate(10);
                return view('admin.artikel.show',compact('artikel'))
                ->with('i', (request()->input('page', 1) - 1) * 10);
            }else{
                return redirect()->route('home')
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
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'top_news' => 'required',
        ]);

        $foto = $request->file('foto');
        $foto->storeAs('/article/img', $foto->hashName(), 'public');
        

        Artikel::create([
            'judul' => $request->judul,
            'author' => $request->author,
            'isi_artikel' => $request->isi_artikel,
            'foto' => $foto->hashName(),
            'top_news' => $request->top_news,
        ]);
        return redirect()->route('admin.show.artikel')
                        ->with('success', 'Artikel telah ditambahkan');
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
            'top_news' => 'required',
        ]);

        $artikel = Artikel::findOrFail($request->id);
        if($request->file('foto') == ""){
            $artikel->update([
            'judul' => $request->judul,
            'author' => $request->author,
            'isi_artikel' => $request->isi_artikel,
            'top_news' => $request->top_news,
            ]);
        }else{
            $foto = $request->file('foto');
            $foto->storeAs('/article/img', $foto->hashName(), 'public');

            $artikel->update([
                'judul' => $request->judul,
                'author' => $request->author,
                'isi_artikel' => $request->isi_artikel,
                'foto' => $foto->hashName(),
                'top_news' => $request->top_news,
            ]);
        }
        return redirect()->route('admin.show.artikel')
                        ->with('success', 'Artikel berhasil diupdate');
    }

    public function destroy($id)
    {
        $post = Artikel::findOrFail($id);
        $post->delete();
        return redirect()->route('admin.show.artikel')
                        ->with('success', 'Artikel telah dihapus');
    }
}