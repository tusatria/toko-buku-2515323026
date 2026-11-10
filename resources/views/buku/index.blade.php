
@extends('layouts.app')

@section('title', 'Katalog Manga - MangaStore')

@section('content')

@php
    $daftarGambar = [
        'one piece' => 'one-piece.jpg',
        'naruto' => 'naruto.jpg',
        'jujutsu kaisen' => 'jujutsu-kaisen.jpg',
        'demon slayer' => 'demon-slayer.jpg',
        'attack on titan' => 'attack-on-titan.jpg',
        'chainsaw man' => 'chainsaw-man.jpg',
    ];
@endphp

{{-- HERO SECTION --}}
<section class="hero-section p-4 p-md-5 mb-5 rounded-4">
    <h1 class="fw-bold">Selamat Datang di MangaStore!</h1>

    <p class="mb-0">
        Jelajahi koleksi manga favoritmu dan temukan cerita yang kamu suka.
    </p>
</section>

{{-- KATALOG --}}
<div class="mb-4">
    <h2 class="fw-bold">Katalog Manga</h2>

    <p class="text-muted">
        Pilih manga untuk melihat informasi lengkapnya.
    </p>
</div>

{{-- DAFTAR KARTU --}}
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

    @forelse ($daftarBuku as $buku)

        @php
            $judul = strtolower(trim($buku->title));
            $gambar = null;

            foreach ($daftarGambar as $kata => $namaFile) {
                if (str_contains($judul, $kata)) {
                    $gambar = $namaFile;
                    break;
                }
            }

            $gambarAda = $gambar && file_exists(public_path('images/' . $gambar));
        @endphp

        <div class="col">

            <div class="card kartu-buku h-100 shadow-sm">

                {{-- GAMBAR SAMPUL --}}
                @if ($gambarAda)
                    <img
                        src="{{ asset('images/' . $gambar) }}"
                        class="card-img-top"
                        alt="Sampul {{ $buku->title }}"
                        style="height: 300px; object-fit: cover;">
                @else
                    <div
                        class="bg-light d-flex justify-content-center align-items-center"
                        style="height: 300px;">
                        <span class="text-muted">
                            Sampul tidak tersedia
                        </span>
                    </div>
                @endif

                {{-- INFORMASI MANGA --}}
                <div class="card-body d-flex flex-column">

                    <h5 class="card-title fw-bold">
                        {{ $buku->title }}
                    </h5>

                    <p class="text-muted mb-2">
                        {{ $buku->author_name }}
                    </p>

                    <p class="harga-buku mb-2">
                        Rp{{ number_format($buku->price, 0, ',', '.') }}
                    </p>

                    <p class="text-muted small mb-3">
                        Kategori:
                        {{ $buku->category->name ?? '-' }}
                    </p>

                    <a
                        href="{{ url('/buku/' . $buku->id) }}"
                        class="btn btn-primary mt-auto">
                        Lihat Detail
                    </a>

                </div>

            </div>

        </div>

    @empty

        <div class="col-12">
            <div class="alert alert-info">
                Belum ada manga yang tersedia.
            </div>
        </div>

    @endforelse

</div>

@endsection
