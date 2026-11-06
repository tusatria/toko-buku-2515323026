
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - Identitas Mahasiswa</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #090909;
            color: white;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }

        .container {
            width: 100%;
            max-width: 1400px;
            min-height: 600px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            background: #171717;
            border: 1px solid #383838;
            border-radius: 15px;
            overflow: hidden;
        }

        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 60px;
        }

        .identity {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #eeeeee;
        }

        .description {
            color: #999;
            font-size: 18px;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .links {
            display: flex;
            flex-direction: column;
            gap: 22px;
            margin-bottom: 45px;
        }

        .links a {
            color: #f04438;
            font-weight: bold;
            text-decoration: none;
        }

        .links a:hover {
            text-decoration: underline;
        }

        .button {
            display: inline-block;
            width: fit-content;
            padding: 15px 30px;
            border-radius: 7px;
            background: white;
            color: #222;
            text-decoration: none;
            font-size: 18px;
            transition: .3s;
        }

        .button:hover {
            background: #f04438;
            color: white;
        }

        .version {
            color: #888;
            margin-top: 60px;
        }

        .version a {
            color: #f04438;
            text-decoration: none;
            font-weight: bold;
        }

        .visual {
            background: #260000;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border-left: 2px solid #f04438;
        }

        .visual img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media (max-width: 800px) {
            .container {
                grid-template-columns: 1fr;
            }

            .content {
                padding: 40px 25px;
            }

            .visual {
                min-height: 300px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="content">

        <div class="identity">
            I Putu Agus Satria Wibawa - 2515323056
        </div>

        <div class="description">
            Welcome to Laravel Project.
            <br>
            Sistem informasi dan aplikasi MangaStore.
            <br>
            Selamat datang di project Laravel saya.
        </div>

        <div class="links">
            <div>
                ◉ &nbsp; Read the
                <a href="https://laravel.com/docs">Documentation ↗</a>
            </div>

            <div>
                ◉ &nbsp; Watch video tutorials at
                <a href="https://laracasts.com">Laracasts ↗</a>
            </div>
        </div>

        <a href="{{ url('/buku') }}" class="button">
            Masuk ke MangaStore
        </a>

        <div class="version">
            Laravel Project
            &nbsp;
            <a href="https://laravel.com">View Laravel ↗</a>
        </div>

    </div>

    <div class="visual">
        <img
            src="https://laravel.com/img/logomark.min.svg"
            alt="Laravel Logo"
        >
    </div>

</div>

</body>
</html>
