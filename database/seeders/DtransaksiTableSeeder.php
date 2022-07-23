<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class DtransaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datadtl_transaksi = [
            ['id_dtl_transaksi' => '3001','no_transaksi' => '4001', 'no_kamar' => '167'],
            ['id_dtl_transaksi' => '3002','no_transaksi' => '4002', 'no_kamar' => '170'],
            ['id_dtl_transaksi' => '3003','no_transaksi' => '4003', 'no_kamar' => '150'],
            ['id_dtl_transaksi' => '3004','no_transaksi' => '4004', 'no_kamar' => '90'],
            ['id_dtl_transaksi' => '3005','no_transaksi' => '4005', 'no_kamar' => '69'],
        ];
        DB::table('detailtransaksi')->insert($datadtl_transaksi);
    }
}
