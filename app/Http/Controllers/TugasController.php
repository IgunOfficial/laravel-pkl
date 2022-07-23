<?php

namespace App\Http\Controllers;
use App\Models\Karyawan;
use App\Models\Pengunjung;
use App\Models\Transaksi;
use App\Models\Dtltransaksi;
use App\Models\Kamar;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
        $pengunjung = Pengunjung::all();
        $transaksi = Transaksi::all();
        $detailtransaksi = Dtltransaksi::all();
        $kamar = Kamar::all();
    return view('post.home', compact('karyawan','pengunjung','transaksi','detailtransaksi','kamar'));
    }
}
