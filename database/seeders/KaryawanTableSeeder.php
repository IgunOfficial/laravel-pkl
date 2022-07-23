<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use  DB;
use Illuminate\Database\Seeder;

class KaryawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datakaryawan = [
            ['id_karyawan' => '1001','nm_karyawan' => 'Asep Guludug', 'JK' => 'Laki Banget'],
            ['id_karyawan' => '1002','nm_karyawan' => 'Ujang Dordar', 'JK' => 'Laki Pisan'],
            ['id_karyawan' => '1003','nm_karyawan' => 'Ceu Edoh', 'JK' => 'Perempuan'],
            ['id_karyawan' => '1004','nm_karyawan' => 'Ade Bedog', 'JK' => 'Laki'],
            ['id_karyawan' => '1005','nm_karyawan' => 'Asep Linggis', 'JK' => 'Laki Banget'],
        ];
        DB::table('karyawan')->insert($datakaryawan);
    }
}
