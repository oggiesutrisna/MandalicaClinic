<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Mandalica Reads</title>
    <meta content="Bertempat di lokasi strategis Mandalika, Mandalica Clinic siap memberikan layanan kesehatan profesional untuk anda dan keluarga." name="description">
    <meta content="Layanan kesehatan terbaik di Mandalika" name="keywords">
    <meta content="Mandalica Clinic" name="author">
    <meta content="Mandalica Clinic, Klinik Mandalika, Clinic Mandalica, Circuit Mandalica, gp mandalica, mandalica cake, mandalika">
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

<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-9SD1WTYY2Q"></script>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WHCF9JJ" height="0" width="0"
    style="display:none;visibility:hidden"></iframe></noscript>

    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/625cda927b967b11798b2be4/1g0tbbjrb';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>

<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WHCF9JJ');
</script>

<body>
    @include('layouts.lariat-nav1')
    @include('layouts.lariat-nav2')

    @yield('content')

    @include('layouts.lariat-whatsapp')
    @include('layouts.lariat-footer')
    @extends('layouts.lariat-modal')
    <script src="{{ asset('assets-frontend/assets/bootstrap/css/bootstrap.min.css') }}"></script>
    <script src="{{ asset('assets-frontend/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/a610d66868.js" crossorigin="anonymous"></script>
</body>

</html>
