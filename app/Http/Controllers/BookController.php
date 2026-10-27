<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    private array $daftarBuku = [
        1 => [
            'judul' => 'Laskar Pelangi',
            'penulis' => 'Andrea Hirata',
        ],
        2 => [
            'judul' => 'Bumi',
            'penulis' => 'Tere Liye',
        ],
        3 => [
            'judul' => 'Negeri 5 Menara',
            'penulis' => 'Ahmad Fuadi',
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