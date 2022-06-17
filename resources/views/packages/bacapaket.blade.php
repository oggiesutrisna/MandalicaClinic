<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Package - {{ $package->nama }}</title>
</head>
<body>
    <h1>
        Laravel Debug Mode : by SleepingMonkey-
    </h1>
    <h2>
        Nama : {{ $package->nama }}
    </h2>
    <h2>
        Slug : {{ $package->slug }}
    </h2>
    <h2>
        harga : {{ $package->harga }}
    </h2>
    <h2>
        Kategori : {{ $package->categories }}
    </h2>
    <h2>
        Keterangan : {!! $package->keterangan !!}
    </h2>
</body>
</html>
