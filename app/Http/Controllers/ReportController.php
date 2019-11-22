<?php

namespace App\Http\Controllers;

use PDF;
use App\Permintaan;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function cariReport(Request $request)
    {

        if ($request->has('tgl_awal')) {
            $permintaan = Permintaan::whereBetween('request_date', [request('tgl_awal'), request('tgl_akhir')])
                ->where('status', 'accept')
                ->get();
        }
        // dd($permintaan);
        $pdf = PDF::loadView('contents.permintaan.cetak', compact('permintaan'))->setPaper('a3', 'landscape');

        return $pdf->stream('laporan_pembayaran.pdf');
    }
}
