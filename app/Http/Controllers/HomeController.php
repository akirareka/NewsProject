<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function index_dokter()
    {
        return view('doctor.home');
    }


    public function selfhealing()
    {
        return view('selfhealing.home');
    }

    public function view_selfhealing()
    {
        return view('selfhealing.view');
    }

    public function view_selfhealing2()
    {
        return view('selfhealing.view2');
    }

    public function view_selfhealing3()
    {
        return view('selfhealing.view3');
    }
}
