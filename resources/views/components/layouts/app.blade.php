<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="/" class="btn btn-primary">BERANDA</a>
                <a href="/produk" class="btn btn-primary">Produk</a>
                <a href="/pelanggan" class="btn btn-primary">Pelanggan</a>
                <a href="/transaksi" class="btn btn-primary">Transaksi</a>

            </div>
        </div>
        {{ $slot }}
    </div>

</body>

</html>
