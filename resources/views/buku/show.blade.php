
@extends('layouts.app')

@section('title', ($buku->title ?? 'Manga Tidak Ditemukan') . ' - MangaStore')

@section('content')

    @if ($buku)

        @php
            $judul = strtolower(trim($buku->title));

            $daftarGambar = [
                'one piece' => 'one-piece.jpg',
                'naruto' => 'naruto.jpg',
                'jujutsu kaisen' => 'jujutsu-kaisen.jpg',
                'demon slayer' => 'demon-slayer.jpg',
                'attack on titan' => 'attack-on-titan.jpg',
                'chainsaw man' => 'chainsaw-man.jpg',
            ];

            $gambar = null;

            foreach ($daftarGambar as $kata => $namaFile) {
                if (str_contains($judul, $kata)) {
                    $gambar = $namaFile;
                    break;
                }
            }

            $gambarAda = $gambar && file_exists(public_path('images/' . $gambar));
        @endphp

        <div class="row g-4 align-items-start">

            {{-- SAMPUL MANGA --}}
            <div class="col-md-4">

                @if ($gambarAda)
                    <img
                        src="{{ asset('images/' . $gambar) }}"
                        class="sampul-detail rounded-4 shadow-sm img-fluid"
                        alt="Sampul {{ $buku->title }}">
                @else
                    <div class="bg-light rounded-4 p-5 text-center">
                        Sampul tidak tersedia
                    </div>
                @endif

            </div>

            {{-- INFORMASI MANGA --}}
            <div class="col-md-8">

                <span class="badge text-bg-primary mb-3">
                    {{ $buku->category->name ?? 'Koleksi Manga' }}
                </span>

                <h1 class="fw-bold">
                    {{ $buku->title }}
                </h1>

                <p class="text-muted">
                    Penulis: {{ $buku->author_name }}
                </p>

                <hr>

                <p class="mb-1">Harga manga</p>

                <h2 class="harga-buku mb-4">
                    Rp{{ number_format($buku->price, 0, ',', '.') }}
                </h2>

                <p>
                    Manga ini tersedia dalam katalog MangaStore.
                    Kembali ke katalog untuk melihat koleksi lainnya.
                </p>

                <a
                    href="{{ url('/buku') }}"
                    class="btn btn-outline-primary mt-2">
                    &larr; Kembali ke Katalog
                </a>

            </div>
        </div>

    @else

        <div class="alert alert-warning">
            <h4 class="alert-heading">Manga Tidak Ditemukan</h4>

            <p class="mb-0">
                Manga yang kamu cari tidak tersedia di katalog.
            </p>
        </div>

        <a href="{{ url('/buku') }}" class="btn btn-primary">
            Kembali ke Katalog
        </a>

    @endif

@endsection
