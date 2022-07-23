<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class KamarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datakamar = [
            ['no_kamar' => '167','jenis_kamar' => 'Single Room', 'harga' => '500000'],
            ['no_kamar' => '170','jenis_kamar' => 'Standard Room', 'harga' => '300000'],
            ['no_kamar' => '150','jenis_kamar' => 'Deluxe Room', 'harga' => '600000'],
            ['no_kamar' => '90','jenis_kamar' => 'Single Room', 'harga' => '500000'],
            ['no_kamar' => '69','jenis_kamar' => 'Deluxe Room', 'harga' => '600000'],
        ];
        DB::table('kamar')->insert($datakamar);
    }
}
