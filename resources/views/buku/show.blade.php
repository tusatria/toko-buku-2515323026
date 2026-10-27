
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
</head>
<body>
    @if ($buku)
        <h1>Detail Buku</h1>

        <p>Judul: {{ $buku['judul'] }}</p>
        <p>Penulis: {{ $buku['penulis'] }}</p>
    @else
        <h1>Buku Tidak Ditemukan</h1>
        <p>Buku dengan ID {{ $id }} tidak tersedia.</p>
    @endif

    <a href="/buku">Kembali ke Daftar Buku</a>
</body>
</html>
