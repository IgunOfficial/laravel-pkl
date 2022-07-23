<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    //menu
    public function menu(){
        $a = [
            [
                'pilihan' => "Beranda",
            ],
            [
                'pilihan' => "Berita",
                'kategori' => [
                    [
                        'pilihankategori' => 'Olahraga',
                        'menu' => [
                            'Sepak Bola',
                            'Bulu Tangkis'
                        ]
                        ],
                        [
                            'pilihankategori' => 'Politik'
                        ],
                        [
                            'pilihankategori' => "Manca Negara"
                        ]
                ]
                        ],
                        [
                            'pilihan' => 'Tentang'
                        ]
                        ];
                        return view('page.menu', ['menu' => $a]);
    }

    //dosen
    public function dosen()
    
    {
        $a = [
            ['id' => 1, 'namadosen' => 'Yusuf Bachtiar', 'matkul' => 'Pemrograman Mobile', 
            'mahasiswa' => [
                ['nama' => 'Muhammad Soleh', 'nilai' => 78],
                ['nama' => 'Jujun Junaedi', 'nilai' => 85],
                ['nama' => 'Mamat Alkatiri', 'nilai' => 90],
                ['nama' => 'Ubay Holin', 'nilai' => 87],
                ['nama' => 'Fadillah', 'nilai' => 95]
            ]
            ],
            ['id' => 2, 'namadosen' => 'Yaris Riyadi', 'matkul' => 'Pemrograman Web', 
            'mahasiswa' => [
                ['nama' => 'Alfred McTomminay', 'nilai' => 67],
                ['nama' => 'Bruno Kasmir', 'nilai' => 90],
                ['nama' => 'Akid Hendra', 'nilai' => 50],
                ['nama' => 'Dany Irawan', 'nilai' => 70],
                ['nama' => 'Chandra Mega Putra', 'nilai' => 60]
            ]
            ],
        ];
        return view('page.dosen', ['dosen' => $a]);
    }

    public function televisi()
    {
        $a = [
            ['nama_channel' => 'NET TV',
            'jadwal' => [
                ['acara' => 'Ini Talkshow', 'jam_tayang' => "20.00 WIB"],
                ['acara' => '86', 'jam_tayang' => "21.00 WIB"],
                ['acara' => 'To Night Show', 'jam_tayang' => "22.00 WIB"]
            ]
        ],
        ['nama_channel' => 'MNCTV',
            'jadwal' => [
                ['acara' => 'Upin & Ipin', 'jam_tayang' => "07.00 WIB"],
                ['acara' => 'Shaun The Seep', 'jam_tayang' => "14.00 WIB"],
                ['acara' => 'Aladin', 'jam_tayang' => "09.00 WIB"]
            ]
        ],
        ['nama_channel' => 'Indosiar',
            'jadwal' => [
                ['acara' => 'Azab Maling Domba', 'jam_tayang' => "12.00 WIB"],
                ['acara' => 'Pertandingan Persib VS Persija', 'jam_tayang' => "15.30 WIB"],
                ['acara' => 'Pertandingan Arema VS Persebaya', 'jam_tayang' => "18.30 WIB"]
            ]
        ],
        ['nama_channel' => 'SCTV',
            'jadwal' => [
                ['acara' => 'Liputan Pagi', 'jam_tayang' => "06.30 WIB"],
                ['acara' => 'FTV Pagi', 'jam_tayang' => "09.30 WIB"],
                ['acara' => 'Liputan Siang', 'jam_tayang' => "11.30 WIB"]
            ]
        ],
        ['nama_channel' => 'Trans 7',
            'jadwal' => [
                ['acara' => 'Si Bolang', 'jam_tayang' => "12.30 WIB"],
                ['acara' => 'Unyil', 'jam_tayang' => "13.30 WIB"],
                ['acara' => 'Jejak Si Saha', 'jam_tayang' => "15.00 WIB"]
            ]
        ],
    ];
    return view('page.televisi', ['televisi' => $a]);
    }
}
