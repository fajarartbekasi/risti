<?php

namespace App\Http\Controllers\Informasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TentangController extends Controller
{
    public function index()
    {
        return view('contents.informasi.tentangKami');
    }
}
