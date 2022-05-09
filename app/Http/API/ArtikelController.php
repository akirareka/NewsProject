<?php

namespace App\Http\API;

use App\Models\Artikel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        return Artikel::all();
    }
 
    public function show($id)
    {
        return Artikel::find($id);
    }

    public function store(Request $request)
    {
        return Artikel::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Artikel = Artikel::findOrFail($id);
        $Artikel->update($request->all());

        return $Artikel;
    }

    public function delete(Request $request, $id)
    {
        $Artikel = Artikel::findOrFail($id);
        $Artikel->delete();

        return 204;
    }
}
