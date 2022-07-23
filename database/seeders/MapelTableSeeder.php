<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class MapelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datamapel = [
            ['Kode_MP' => 'MP01', 'Nama_MP' => 'ALGORITMA', 'SKS' => '2', 'Semester' => '1'],
            ['Kode_MP' => 'MP02', 'Nama_MP' => 'BASISDATA', 'SKS' => '3', 'Semester' => '1'],
            ['Kode_MP' => 'MP03', 'Nama_MP' => 'ASSEMBLY', 'SKS' => '2', 'Semester' => '2'],
        ];
        DB::table('mapel')->insert($datamapel);
    }
}
