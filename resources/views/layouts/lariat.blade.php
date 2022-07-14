<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Mandalica Reads</title>
    <link rel="stylesheet" href="{{ asset('assets-frontend/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-frontend/assets/css/styles.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-frontend/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-frontend/assets/css/Articles-Cards.css') }}">
</head>

<style>
    a {
        color: #000000;
        text-decoration: none;
    }
</style>

<body>
    @include('layouts.lariat-nav1')
    @include('layouts.lariat-nav2')

    @yield('content')

    @include('layouts.lariat-whatsapp')
    @include('layouts.lariat-footer')
    <script src="{{ asset('assets-frontend/assets/bootstrap/css/bootstrap.min.css') }}"></script>
    <script src="{{ asset('assets-frontend/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/a610d66868.js" crossorigin="anonymous"></script>
</body>

</html>
