<?php

namespace App\Http\Controllers;

use App\Lapangan;
use Illuminate\Http\Request;

class LapanganController extends Controller
{
    public function index(Request $request)
    {   
        if ($request->isMethod('post')) {
            $nama   = $request->nama;
            $wa     = $request->telp; //wa pelanggan
            $tgl    = $request->tgl;
            $lap    = $request->lap;
            $jam    = $request->jm;
            $cat    = $request->cat;

            $target = ("https://api.whatsapp.com/send?phone=6285217995654&text=Nama:%20$nama%20%0DNomor:%20$wa%20%0DTanggal:%20$tgl%20%0DLapangan:%20$lap%20%0DJam:%20$jam%20%0DCatatan:%20$cat%20%0D");

            return redirect()->away($target);
        }else{
            // $dump = Lapangan::where([['lat', '=', 'NULL']])->get();
            // $lapangan = Lapangan::distinct()->get(['lat','lng','nama']);
            // return view('profile',['lapangan'=>$lapangan,'dump'=>$dump]);
            return view('profile');
        }


    }
}
