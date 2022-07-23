<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class TransaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datatransaksi = [
            ['no_transaksi' => '2001','id_pengunjung' => '1001', 'id_karyawan' => '1002','jmlh_kamar' => '1',
            'tgl_masuk' => '2022-10-23', 'tgl_keluar' => '2022-10-24','lama_nginap' => '1','total_harga' => '1000000'],
            ['no_transaksi' => '2002','id_pengunjung' => '1002', 'id_karyawan' => '1001','jmlh_kamar' => '2',
            'tgl_masuk' => '2022-11-23', 'tgl_keluar' => '2022-11-24','lama_nginap' => '2','total_harga' => '4000000'],
            ['no_transaksi' => '2003','id_pengunjung' => '1003', 'id_karyawan' => '1004','jmlh_kamar' => '1',
            'tgl_masuk' => '2022-07-23', 'tgl_keluar' => '2022-07-24','lama_nginap' => '3','total_harga' => '3000000'],
            ['no_transaksi' => '2004','id_pengunjung' => '1004', 'id_karyawan' => '1005','jmlh_kamar' => '1',
            'tgl_masuk' => '2022-06-23', 'tgl_keluar' => '2022-06-24','lama_nginap' => '2','total_harga' => '2000000'],
            ['no_transaksi' => '2005','id_pengunjung' => '1005', 'id_karyawan' => '1003','jmlh_kamar' => '3',
            'tgl_masuk' => '2022-02-23', 'tgl_keluar' => '2022-02-24','lama_nginap' => '1','total_harga' => '3000000'],
        ];
        DB::table('transaksi')->insert($datatransaksi);
    }
}
