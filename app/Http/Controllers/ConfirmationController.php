<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Permintaan;
use Illuminate\Http\Request;

class ConfirmationController extends Controller
{
    public function edit($id)
    {
        $permintaan = Permintaan::find($id);

        return view('customers.confirmation.edit', compact('permintaan'));
    }

    public function update(Request $request)
    {

        $this->validate(request(), [
            'request_id'         =>  'required|exists:permintaans,id',
            'berkas'             =>  'required|mimes:jpeg,png|max:10000'
        ]);

        $permintaan  = Permintaan::where('id', $request->get('id'))->firstOrFail();

        $permintaan->update(['status' => 'masuk']);

        if ($request->hasFile('berkas')) {

            $upload_file = $request->file('berkas');

            $extension   = $upload_file->getClientOriginalName();

            $filename    = md5(time() . '.' . $extension);

            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'berkas/';

            $upload_file->move($destinationPath, $filename);
        }

        $payment = Payment::create([
            'request_id'     => $permintaan->id,
            'berkas'            => $filename
        ]);

        flash()->success('Terimakasih ka atas pembayaran yang telah dilakukan  petugas kami akan segera menuju alamat anda');

        return redirect()->back();

    }
}
