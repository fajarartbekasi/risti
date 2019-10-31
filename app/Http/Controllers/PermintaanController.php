<?php

namespace App\Http\Controllers;

use App\Permintaan;
use Illuminate\Http\Request;

class PermintaanController extends Controller
{
    public function index()
    {
        $permintaans = Permintaan::where('status','accept')->simplePaginate(5);

        return view('contents.permintaan.index', compact('permintaans'));
    }

    public function update(Request $request, $id)
    {
        $permintaan = Permintaan::find($id);

        $permintaan->update($request->all());

        flash()->success('Status permintaan telah di perbarui');

        return redirect()->back();
    }
}
