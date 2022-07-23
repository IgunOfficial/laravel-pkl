<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class PesertaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datapeserta = [
            ['NoSISWA' => '2001', 'Kode_MP' => 'MP01'],
            ['NoSISWA' => '2001', 'Kode_MP' => 'MP02'],
            ['NoSISWA' => '2003', 'Kode_MP' => 'MP01'],
            ['NoSISWA' => '2003', 'Kode_MP' => 'MP02'],
            ['NoSISWA' => '2004', 'Kode_MP' => 'MP01'],
            ['NoSISWA' => '2004', 'Kode_MP' => 'MP03'],
        ];
        DB::table('peserta')->insert($datapeserta);
    }
}
