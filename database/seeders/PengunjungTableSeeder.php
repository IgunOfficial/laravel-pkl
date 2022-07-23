<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class PengunjungTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datapengunjung = [
            ['id_pengunjung' => '1001','nm_pengunjung' => 'Ceu Iroh', 'alamat' => 'Papua', 'JK' => 'Perempuan', 'no_hp' => '08914465125', 'no_ktp' => '12345'],
            ['id_pengunjung' => '1002','nm_pengunjung' => 'Alfian Sakarat', 'alamat' => 'Zimbabwe', 'JK' => 'Laki', 'no_hp' => '0891234567', 'no_ktp' => '54321'],
            ['id_pengunjung' => '1003','nm_pengunjung' => 'Herdy Kampak', 'alamat' => 'Dimana we', 'JK' => 'Laki Pisan', 'no_hp' => '0891446543', 'no_ktp' => '234'],
            ['id_pengunjung' => '1004','nm_pengunjung' => 'Irfan Sakeureut', 'alamat' => 'Arab Kulon', 'JK' => 'Laki Bet', 'no_hp' => '0891448976', 'no_ktp' => '123'],
            ['id_pengunjung' => '1005','nm_pengunjung' => 'Ceceu Pacul', 'alamat' => 'Papua Nugini', 'JK' => 'Perempuan', 'no_hp' => '0854321765', 'no_ktp' => '321'],
        ];
        DB::table('pengunjung')->insert($datapengunjung);
    }
}
