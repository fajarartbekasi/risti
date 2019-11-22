<?php

namespace App\Http\Controllers;

use App\Permintaan;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $accepts = Permintaan::with('categorie')->where('status', 'accept')->get();
        $waittings = Permintaan::with('categorie')->where('status', 'waitting')->get();

        $acceptsPermintaan = $accepts->count();
        $waittingLis = $waittings->count();

        return view('home', compact(['acceptsPermintaan', 'waittingLis']));
    }
}
