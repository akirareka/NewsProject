<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel= Artikel::latest()->paginate(10);
        $artikelterbaru = Artikel::latest()->paginate(5);
        return view ('artikel.home',compact('artikel','artikelterbaru'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    public function create()
    {
        return view('artikel.add');
    }

    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('artikels')->insert([
            'judul' => $request->judul,
            'isi_artikel' => $request->isi,
            
                    ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/artikel');
     
    }

    public function read($id)
    {
        $artikel = DB::table('artikels')->where('id',$id)->get();
        return view('artikel.artikel',['artikel'=>$artikel]);
    }
    public function edit($id)
    {
      
        $artikel = DB::table('artikels')->where('id',$id)->get();
        return view('artikel.edit',['artikel' => $artikel]);
     
    }
    public function update(Request $request)
    {
	// update data pegawai
    Artikel::where('id',$request->id)->update([
		'judul' => $request->judul,
        'isi_artikel' => $request->isi,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect()->to('artikel/read/'.$request->id)->withErrors(['msg' => 'Artikel berhasil diedit']);;
    }

    public function delete($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('artikels')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/artikel');
}
}
