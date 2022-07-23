<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use DB;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sempel = [
            ['title' => 'Tips Cepet Nikah', 'content' => 'assalaam studio'],
            ['title' => 'Harus menunda nikah?', 'content' => 'assalaam studio'],
            ['title' => 'Membangun visi misi keluarga', 'content' => 'assalaam studio'],
        ];
        DB::table('posts')->insert($sempel);
    }
}