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
    <nav class="navbar navbar-light navbar-expand-md py-3">
        <div class="container"><a class="navbar-brand d-flex align-items-center"
                href="https://wa.me/6282298298911"><span
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
                                style="color: var(--bs-blue);background: var(--bs-red);"><a class="btn btn-primary"
                                    type="button" href="https://www.facebook.com/mandalicaclinic"
                                    style="background: var(--bs-red);border-color: var(--bs-red);">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a><a class="btn btn-primary" type="button"
                                    href="https://instagram.com/klinikmandalica?igshid=YmMyMTA2M2Y="
                                    style="background: var(--bs-red);border-color: var(--bs-red);">
                                    <i class="fa-brands fa-instagram"></i>
                                </a></div>
                            <div class="btn-group" role="group"><a class="btn btn-primary" href="" type="button"
                                    style="background: var(--bs-red);border-color: var(--bs-red);"><i
                                        class="fa-brands fa-google"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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
                    </svg></span><span>Mandalica Reads</span></a><button data-bs-toggle="collapse"
                class="navbar-toggler" data-bs-target="#navcol-3"><span class="visually-hidden">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-3">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('mandalicapackages') }}">Our Packages</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('mandalicareads') }}">Blogs</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Career</a></li>
                </ul><button class="btn btn-primary" type="button"
                    style="background: var(--bs-red);border-color: var(--bs-red);" data-bs-target="#modalExample"
                    data-bs-toggle="modal">Buat Appointment</button>
            </div>
        </div>
    </nav>
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Mandalika Reads</h2>
                <p class="w-lg-50">Dapatkan informasi terkini terkait kesehatan yang terjadi di Indonesia maupun
                    Dunia.<br></p>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            @foreach($blogs as $bg)
            <div class="col-lg-4">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;"
                        src="https://source.unsplash.com/random/?nurse">
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0">{{ $bg->tag }}</p>
                        <a href="{{ route('readsmandalika', $bg->judul) }}">
                            <h4 class="card-title">{{ $bg->judul }}</h4>
                        </a>
                        <div class="d-flex">
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
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
                    <h3 class="fs-6">Layanan</h3>
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

    <script src="{{ asset('assets-frontend/assets/bootstrap/css/bootstrap.min.css') }}"></script>
    <script src="{{ asset('assets-frontend/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/a610d66868.js" crossorigin="anonymous"></script>
</body>

</html>
