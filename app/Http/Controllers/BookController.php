<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $daftarBuku = Book::with('category')->get();

        return view('buku.index', compact('daftarBuku'));
    }

    public function show($id)
    {
        $buku = Book::with('category')->findOrFail($id);

        return view('buku.show', compact('buku'));
    }
}
