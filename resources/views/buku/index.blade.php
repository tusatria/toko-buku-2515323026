
@extends('layouts.app')

@section('title', 'Katalog Manga - MangaStore')

@section('content')

    <section class="hero-section p-4 p-md-5 mb-5 rounded-4">
        <h1 class="fw-bold">Selamat Datang di MangaStore!</h1>

        <p class="mb-0">
            Jelajahi koleksi manga favoritmu dan temukan cerita yang kamu suka.
        </p>
    </section>

    <div class="mb-4">
        <h2 class="fw-bold">Katalog Manga</h2>
        <p class="text-muted">
            Pilih manga untuk melihat informasi lengkapnya.
        </p>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

        @foreach ($daftarBuku as $id => $buku)
            <div class="col">
                <div class="card kartu-buku h-100 shadow-sm">

                    <img
                        src="{{ asset('images/' . $buku['gambar']) }}"
                        class="card-img-top"
                        alt="Sampul {{ $buku['judul'] }}">

                    <div class="card-body d-flex flex-column">

                        <h5 class="card-title fw-bold">
                            {{ $buku['judul'] }}
                        </h5>

                        <p class="text-muted mb-2">
                            {{ $buku['penulis'] }}
                        </p>

                        <p class="harga-buku mb-3">
                            Rp{{ number_format($buku['harga'], 0, ',', '.') }}
                        </p>

                        <a
                            href="{{ url('/buku/' . $id) }}"
                            class="btn btn-primary mt-auto">
                            Lihat Detail
                        </a>

                    </div>
                </div>
            </div>
        @endforeach

    </div>

@endsection
