<?php

namespace App\Http\Controllers\Informasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    public function index()
    {
        return view('contents.informasi.products');
    }
}
