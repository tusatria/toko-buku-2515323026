
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'MangaStore')</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>

    <x-navbar />

    <main class="container my-5">
        @yield('content')
    </main>

    <footer class="text-center py-4 mt-5">
        <h5 class="fw-bold">MangaStore</h5>
        <p class="mb-1">Temukan manga favoritmu di sini.</p>
        <small>&copy; {{ date('Y') }} MangaStore</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
