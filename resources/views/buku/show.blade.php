
@extends('layouts.app')

@section('title', ($buku['judul'] ?? 'Manga Tidak Ditemukan') . ' - MangaStore')

@section('content')

    @if ($buku)

        <div class="row g-4 align-items-start">

            <div class="col-md-4">
                <img
                    src="{{ asset('images/' . $buku['gambar']) }}"
                    class="sampul-detail rounded-4 shadow-sm"
                    alt="Sampul {{ $buku['judul'] }}">
            </div>

            <div class="col-md-8">

                <span class="badge text-bg-primary mb-3">
                    Koleksi Manga
                </span>

                <h1 class="fw-bold">
                    {{ $buku['judul'] }}
                </h1>

                <p class="text-muted">
                    Penulis: {{ $buku['penulis'] }}
                </p>

                <hr>

                <p class="mb-1">Harga manga</p>

                <h2 class="harga-buku mb-4">
                    Rp{{ number_format($buku['harga'], 0, ',', '.') }}
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
                Manga dengan ID {{ $id }} tidak tersedia di katalog.
            </p>
        </div>

        <a href="{{ url('/buku') }}" class="btn btn-primary">
            Kembali ke Katalog
        </a>

    @endif

@endsection
