<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Http\Requests\PengajuanRequest;
use App\Mail\PengajuanMail;
use App\Permintaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PengajuanController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        return view('customers.pengajuan.index', compact('categories'));
    }

    public function edit($id)
    {
       $categorie =  Categorie::find($id);

       return view('customers.pengajuan.edit', compact('categorie'));
    }

    public function store(PengajuanRequest $request)
    {
        $pengajuan = Permintaan::create($request->formPengajuan());

        $to = Mail::to($request->get('email'))->send(new PengajuanMail($pengajuan));

        flash()->success('Horay, permintaan kaka telah terkirim silahkan cek email kak untuk melakukan upload pembayaran ya kak');

        return redirect()->back();
    }
}
