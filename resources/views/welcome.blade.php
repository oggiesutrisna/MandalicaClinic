<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Tawk to Mandalica --}}
    <!--Start of Tawk.to Script-->
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
    <!--End of Tawk.to Script-->
    {{-- end of Tawk to Mandalica --}}

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9SD1WTYY2Q"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-9SD1WTYY2Q');
    </script>
    <!-- Google Tag Manager -->

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

    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Mandalica Clinic</title>
    <meta
        content="Bertempat di lokasi strategis Mandalika, Mandalica Clinic siap memberikan layanan kesehatan profesional untuk anda dan keluarga."
        name="description">
    <meta content="Layanan kesehatan terbaik di Mandalika" name="keywords">
    <meta content="Mandalica Clinic" name="author">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Mandalika Clinic</title>
    <link rel="stylesheet" href="{{ asset('assets-frontend/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-frontend/assets/css/styles.min.css') }}">

</head>

<body>

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WHCF9JJ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <main id="main">
        @include('sweetalert::alert')
        {{-- Navigation Bar --}}
        <nav class="navbar navbar-light navbar-expand-md py-3">
            <div class="container"><a class="navbar-brand d-flex align-items-center" href="https://wa.me/"><span
                        class="bs-icon-sm fa-solid fa-phone bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon"
                        style="background: var(--bs-red);">
                    </span><span>Call Center</span></a><button data-bs-toggle="collapse" class="navbar-toggler"
                    data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-2">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <div class="btn-toolbar">
                                <div class="btn-group" role="group"
                                    style="color: var(--bs-blue);background: var(--bs-red);"><button
                                        class="btn btn-primary" type="button"
                                        style="background: var(--bs-red);border-color: var(--bs-red);">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </button><button class="btn btn-primary" type="button"
                                        style="background: var(--bs-red);border-color: var(--bs-red);">
                                        <i class="fa-brands fa-instagram"></i>
                                    </button></div>
                                <div class="btn-group" role="group"><button class="btn btn-primary" type="button"
                                        style="background: var(--bs-red);border-color: var(--bs-red);"><i
                                            class="fa-brands fa-google"></i></button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- Navigation Bar End --}}
        <nav class="navbar navbar-light navbar-expand-lg sticky-top bg-white py-3">
            <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span
                        class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon"
                        style="background: var(--bs-red);border-color: var(--bs-red);"><svg
                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-bezier">
                            <path fill-rule="evenodd"
                                d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z">
                            </path>
                            <path
                                d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z">
                            </path>
                        </svg></span><span>Mandalica Clinic</span></a><button data-bs-toggle="collapse"
                    class="navbar-toggler" data-bs-target="#navcol-3"><span class="visually-hidden">Toggle
                        navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-3">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Our Packages</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Career</a></li>
                    </ul><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        type="button" style="background: var(--bs-red);border-color: var(--bs-red);">Buat
                        Appointment</button>
                </div>
            </div>
        </nav>
        <div class="carousel slide" data-bs-ride="carousel" id="carousel-1" style="height: 600px;">
            <div class="carousel-inner h-100">
                <div class="carousel-item active h-100"><img class="w-100 d-block position-absolute h-100 fit-cover"
                        src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Slide Image"
                        style="z-index: -1;">
                    <div class="container d-flex flex-column justify-content-center h-100">
                        <div class="row">
                            <div class="col-md-6 col-xl-4 offset-md-2">
                                <div style="max-width: 350px;">
                                    <h1 class="text-uppercase fw-bold">Layanan kesehatan terbaik di Mandalika<br></h1>
                                    <p class="my-3">Bertempat di lokasi strategis Mandalika, Mandalica Clinic
                                        siap memberikan layanan kesehatan profesional untuk anda dan keluarga.<br></p><a
                                        class="btn btn-primary btn-lg me-2" role="button" href="#"
                                        style="background: var(--bs-red);border-color: var(--bs-red);">Button</a><a
                                        class="btn btn-outline-primary btn-lg" role="button" href="#"
                                        style="border-color: var(--bs-red);color: var(--bs-red);">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100"><img class="w-100 d-block position-absolute h-100 fit-cover"
                        src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Slide Image"
                        style="z-index: -1;">
                    <div class="container d-flex flex-column justify-content-center h-100">
                        <div class="row">
                            <div class="col-md-6 col-xl-4 offset-md-2">
                                <div style="max-width: 350px;">
                                    <h1 class="text-uppercase fw-bold">Layanan TERBAIK DI MANDALIKA</h1>
                                    <p class="my-3">Tincidunt laoreet leo, adipiscing taciti tempor. Primis
                                        senectus sapien, risus donec ad fusce augue interdum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100"><img class="w-100 d-block position-absolute h-100 fit-cover"
                        src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Slide Image"
                        style="z-index: -1;">
                    <div class="container d-flex flex-column justify-content-center h-100">
                        <div class="row">
                            <div class="col-md-6 col-xl-4 offset-md-2">
                                <div style="max-width: 350px;">
                                    <h1 class="text-uppercase fw-bold">Buat APPOINTMENT SANGAT MUDAH</h1>
                                    <p class="my-3">Anda ingin membuat appointment dengan kami, langsung klik
                                        Buat Appointment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span
                        class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a
                    class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span
                        class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
            </ol>
        </div>
        <div class="container py-4 py-xl-5" id="getstarted">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Our Packages</h2>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                <div class="col-md-4">
                    <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;"
                            src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                        <div class="card-body p-4">
                            <h4 class="card-title">Lorem libero donec</h4>
                            <div class="d-flex">
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;"
                            src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                        <div class="card-body p-4">
                            <h4 class="card-title">Lorem libero donec</h4>
                            <div class="d-flex">
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;"
                            src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                        <div class="card-body p-4">
                            <h4 class="card-title">Lorem libero donec</h4>
                            <div class="d-flex">
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-4 py-xl-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Kenapa Mandalika Clinic ?</h2>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon"
                                style="border-color: var(--bs-blue);background: var(--bs-red);">
                                <i class="fa-solid fa-briefcase-medical"></i>
                            </div>
                            <h4 class="card-title">Layanan Medis Terbaik</h4>
                            <p class="card-text">Di Mandalica Clinic kami melayani perawatan kesehatan anda dan
                                keluarga dengan layanan medis terbaik</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon"
                                style="background: var(--bs-red);">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <h4 class="card-title">Pasien yang Utama</h4>
                            <p class="card-text">Mengutamakan pulihnya kesehatan pasien dan disiplin follow up
                                sebagai prioritas</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon"
                                style="background: var(--bs-red);">
                                <i class="fa-solid fa-people-group"></i>
                            </div>
                            <h4 class="card-title">Tim yang Professional</h4>
                            <p class="card-text">Tim Medis Professional, melayani dengan ramah untuk memastikan
                                kenyamanan anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-4 py-xl-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Mandalika Reads</h2>
                    <p class="w-lg-50">Dapatkan informasi terkini terkait kesehatan yang terjadi di Indonesia
                        maupun Dunia.</p>
                </div>
            </div>

            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                <div class="col-md-4">
                    <div class="card"><img class="card-img-top w-100 d-block fit-cover"
                            style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                        <div class="card-body p-4">
                            <h4 class="card-title">Lorem libero donec</h4>
                            <div class="d-flex">
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card"><img class="card-img-top w-100 d-block fit-cover"
                            style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                        <div class="card-body p-4">
                            <h4 class="card-title">Lorem libero donec</h4>
                            <div class="d-flex">
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card"><img class="card-img-top w-100 d-block fit-cover"
                            style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                        <div class="card-body p-4">
                            <h4 class="card-title">Lorem libero donec</h4>
                            <div class="d-flex">
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="position-relative py-4 py-xl-5">
            <div class="container position-relative">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h2>Kesehatan Anda dimulai disini</h2>
                        <p class="w-lg-50">Buat Appointment lewat whatsapp atau email kami.</p><button
                            class="btn btn-primary" type="button"
                            style="border-color: var(--bs-red);background: var(--bs-red);">Whatsapp Sekarang</button>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 col-lg-8 col-xl-6 col-xxl-6">
                        <div>
                            <form class="p-3 p-xl-4" method="post">
                                <div class="mb-3"><input class="form-control" type="text" id="name-1"
                                        name="name" placeholder="Name"></div>
                                <div class="mb-3"><input class="form-control" type="email" id="email-1"
                                        name="tel" placeholder="Nomor Telepon"></div>
                                <div class="mb-3"><input class="form-control" type="email" id="email-2"
                                        name="email" placeholder="Email"></div>
                                <div class="mb-3">
                                    <textarea class="form-control" id="message-1" name="message" rows="6" placeholder="Keluhan Anda"></textarea>
                                </div>
                                <div><button class="btn btn-danger d-block w-100" type="submit">Send </button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container py-4 py-lg-5">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                        <h3 class="fs-6">Services</h3>
                        <ul class="list-unstyled">
                            <li><a class="link-secondary" href="#">Swab Antigen</a></li>
                            <li><a class="link-secondary" href="#">IV Treatment</a></li>
                            <li><a class="link-secondary" href="#">Swab PCR</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                        <h3 class="fs-6">Tentang Mandalika Clinic</h3>
                        <ul class="list-unstyled">
                            <li><a class="link-secondary" href="#">Company</a></li>
                            <li><a class="link-secondary" href="#">Team</a></li>
                            <li><a class="link-secondary" href="#">Legacy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                        <h3 class="fs-6">Karir</h3>
                        <ul class="list-unstyled">
                            <li><a class="link-secondary" href="#">Job openings</a></li>
                            <li><a class="link-secondary" href="#">Employee success</a></li>
                            <li><a class="link-secondary" href="#">Benefits</a></li>
                        </ul>
                    </div>
                    <div
                        class="col-lg-3 text-center text-lg-start d-flex flex-column align-items-center order-first align-items-lg-start order-lg-last item social">
                        <div class="fw-bold d-flex align-items-center mb-2"><span
                                class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center bs-icon me-2"
                                style="background: var(--bs-red);"><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                    height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier">
                                    <path fill-rule="evenodd"
                                        d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z">
                                    </path>
                                    <path
                                        d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z">
                                    </path>
                                </svg></span><span>Mandalika Clinic</span></div>
                        <p class="text-muted copyright">Layanan kesehatan terbaik di Mandalika<br></p>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center pt-3">
                    <p class="text-muted mb-0">Copyright © 2022 Mandalika Clinic</p>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"></li>
                    </ul>
                </div>
            </div>
        </footer>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets-frontend/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets-frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets-frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets-frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets-frontend/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets-frontend/js/main.js') }}"></script>

    {{-- Modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Buat Appointment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('pasiensetor') }}" method="POST" role="form">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama" class="col-form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap Anda"
                                id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="nohp" class="col-form-label">Nomor Handphone Aktif</label>
                            <input type="text" name="nohp" class="form-control"
                                placeholder="Nomor Handphone Aktif yang terpasang di whatsapp" id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="nohp" class="col-form-label">Tempat, Tanggal Lahir</label>
                            <input type="date" name="ttl" class="form-control" id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="nohp" class="col-form-label">Jenis Kelamin</label>
                            <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                                <option value="Laki - Laki">
                                    Laki - Laki
                                </option>
                                <option value="Perempuan">
                                    Perempuan
                                </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="dateappointment" class="col-form-label">Tanggal Appointment</label>
                            <input type="date" name="dateappointment" class="form-control" id="dateappointment">
                        </div>
                        <div class="mb-3">
                            <label for="jenisappointment" class="col-form-label">Jenis Appointment</label>
                            <select name="jenisappointment" id="jenisappointment" class="form-control">
                                <option value="Swab Antigen">Swab Antigen</option>
                                <option value="Swab PCR">Swab PCR</option>
                                <option value="Praktek Dokter">Praktek Dokter</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="col-form-label">Keterangan Tambahan (Optional)</label>
                            <textarea class="form-control" name="keterangan" id="keterangan" cols="30" rows="10"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-danger">Submit Appointment</button>
                </div>
            </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('assets-frontend/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/a610d66868.js" crossorigin="anonymous"></script>
</body>

</html>
