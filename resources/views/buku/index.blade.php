
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>

    <ul>
        @foreach ($daftarBuku as $id => $buku)
            <li>
                <a href="/buku/{{ $id }}">
                    {{ $buku['judul'] }}
                </a>
                — {{ $buku['penulis'] }}
            </li>
        @endforeach
    </ul>
</body>
</html>
