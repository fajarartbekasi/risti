<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Permintaan;
use Illuminate\Http\Request;

class ConfirmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Permintaan $permintaan)
    {
        $this->validate(request(), [
            'request_id'         =>  'required|exists:permintaans,id',
            'berkas'             =>  'required|mimes:jpeg,png|max:10000'
        ]);


        $permintaan = Permintaan::where('id', $request->get('request_id'))->first();

        $permintaan->update(['status' => 'on process']);

        if ($request->hasFile('berkas')) {

            $upload_file = $request->file('berkas');

            $extension   = $upload_file->getClientOriginalName();

            $filename    = md5(time() . '.' . $extension);

            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'berkas/';

            $upload_file->move($destinationPath, $filename);
        }

       Permintaan::updated(['status'=>'process']);
       Payment::create([
            'request_id'     => $request->input('request_id'),
            'berkas'            => $filename
        ]);

        flash()->success('Terimakasih ka atas pembayaran yang telah dilakukan  petugas kami akan segera menuju alamat anda');

        return redirect()->route('pengajuan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permintaan = Permintaan::find($id);

        return view('customers.confirmation.edit', compact('permintaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
