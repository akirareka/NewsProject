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
        $artikel= Artikel::latest()->paginate(6);
        return view ('artikel.home',['artikel'=>$artikel]);
    }

    public function find(Request $request)
    {
        $s= $request->s;
        $artikel= Artikel::where('judul', 'like', "%".$s."%")->get();
        return view ('artikel.home',['artikel'=>$artikel]);
    }

    public function edukasi()
    {
        $artikel= Artikel::where('Category','Edukasi')->get();
        return view ('artikel.home',['artikel'=>$artikel]);
    }
    public function kesehatan()
    {
        $artikel= Artikel::where('Category','Kesehatan')->get();
        return view ('artikel.home',['artikel'=>$artikel]);
    }
    public function otomotif()
    {
        $artikel= Artikel::where('Category','Otomotif')->get();
        return view ('artikel.home',['artikel'=>$artikel]);
    }
    public function sport()
    {
        $artikel= Artikel::where('Category','Sport')->get();
        return view ('artikel.home',['artikel'=>$artikel]);
    }
    public function teknologi()
    {
        $artikel= Artikel::where('Category','Teknologi')->get();
        return view ('artikel.home',['artikel'=>$artikel]);
    }

    public function read($id)
    {
        $artikel = DB::table('artikels')->where('id',$id)->get();
        return view('artikel.artikel',['artikel'=>$artikel]);
    }
    
}
