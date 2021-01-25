<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <title>SoftMakers Contatos</title>
    </head>
    <body class="content">
        <div class="hero is-dark is-bold">
        <div class="hero-body">
            <div class="container">
                <header>
                    <h1 class="title">SoftMakers Contatos</h1>
                </header>
            </div>
        </div>
        </div>
        <div class="section">
            <div class="container">
                <main>
                    @yield("content")
                </main>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <footer>
                    <p>&copy; 2021</p>
                </footer>
            </div>
        </div>
    </body>
</html>
