<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datasiswa = [
            ['NoSISWA' => '2001', 'Nama' => 'Badu', 'JK' => 'L', 'Jurusan' => 'TK'],
            ['NoSISWA' => '2002', 'Nama' => 'Muliati', 'JK' => 'P', 'Jurusan' => 'TE'],
            ['NoSISWA' => '2003', 'Nama' => 'Rahmiadi', 'JK' => 'L', 'Jurusan' => 'TK'],
            ['NoSISWA' => '2004', 'Nama' => 'Nasrol', 'JK' => 'L', 'Jurusan' => 'TK'],
        ];
        DB::table('siswa')->insert($datasiswa);
    }
}
