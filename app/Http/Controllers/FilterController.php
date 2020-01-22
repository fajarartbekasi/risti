<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function cuciac()
    {
        $getData = Categorie::where('name_categorie','cuci ac')->get();
        return view('customers.pengajuan.categorie.cuci',compact('getData'));
    }
    public function bongkarpasangac()
    {
        $getData = Categorie::where('name_categorie','bongkar pasang ac')->get();
        return view('customers.pengajuan.categorie.bongkar',compact('getData'));
    }
    public function reparasiac()
    {
        $getData = Categorie::where('name_categorie','reparasi ac')->get();
        return view('customers.pengajuan.categorie.reparasi',compact('getData'));
    }
}
