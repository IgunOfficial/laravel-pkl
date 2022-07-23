<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengenalanController extends Controller
{
    public function pengenalan(){
        $nama = "Irfan Gunawan";
        $umur = "17";
        return view('page.pengenalan',compact ('nama','umur'));
    }
    public function intro($nama,$alamat,$umur){
        return view('page.intro',compact ('nama','alamat','umur'));
    }

    public function siswa()
    {
        $a = [
            array('id' => 1, 'name' => "Ujang Guludug", 'age' => 17, 'mapel' => ['Matematika', 'B.Indonesia']),
            array('id' => 2, 'name' => "Asep Bedog", 'age' => 16, 'mapel' => ['Fisika', 'B.Inggris']),
        ];

        // dd($a);
        return view('page.siswa', ['siswa' => $a]);
    }

    
}
