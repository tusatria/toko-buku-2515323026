<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    private array $daftarBuku = [
        1 => [
            'judul' => 'One Piece Vol. 1',
            'penulis' => 'Eiichiro Oda',
            'harga' => 35000,
            'gambar' => 'one-piece.jpg',
        ],
        2 => [
            'judul' => 'Naruto Vol. 1',
            'penulis' => 'Masashi Kishimoto',
            'harga' => 32000,
            'gambar' => 'naruto.jpg',
        ],
        3 => [
            'judul' => 'Jujutsu Kaisen Vol. 1',
            'penulis' => 'Gege Akutami',
            'harga' => 40000,
            'gambar' => 'jujutsu-kaisen.jpg',
        ],
        4 => [
            'judul' => 'Demon Slayer Vol. 1',
            'penulis' => 'Koyoharu Gotouge',
            'harga' => 35000,
            'gambar' => 'demon-slayer.jpg',
        ],
        5 => [
            'judul' => 'Attack on Titan Vol. 1',
            'penulis' => 'Hajime Isayama',
            'harga' => 38000,
            'gambar' => 'attack-on-titan.jpg',
        ],
        6 => [
            'judul' => 'Chainsaw Man Vol. 1',
            'penulis' => 'Tatsuki Fujimoto',
            'harga' => 40000,
            'gambar' => 'chainsaw-man.jpg',
        ],
    ];

    public function index()
    {
        return view('buku.index', [
            'daftarBuku' => $this->daftarBuku,
        ]);
    }

    public function show($id)
    {
        $buku = $this->daftarBuku[$id] ?? null;

        return view('buku.show', [
            'buku' => $buku,
            'id' => $id,
        ]);
    }
}
