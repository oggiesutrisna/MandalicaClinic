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
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Mandalica Clinic Official Website</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets-frontend/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets-frontend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets-frontend/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-frontend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-frontend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets-frontend/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Ninestars - v4.7.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  * License Status : Approved by Oggie Sutrisna part of Syntak Creative Bali
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1 class="text-light"><a href="/"><span>Mandalica Clinic</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="/">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Pengalaman Praktek Dokter terbaik hadir di Mandalica</h1>
                    <h2>Jangan khawatir, Klinik terdekat rumah anda dengan hasil yang sangat cepat hadir kembali.</h2>
                    <div>
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="{{ asset('assets-frontend/img/hero-img.svg') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                        <img src="{{ asset('assets-frontend/img/about-img.svg') }}" class="img-fluid"
                            alt="gambar terbaek 2020" data-aos="zoom-in">
                    </div>
                    <div class="col-lg-6 pt-5 pt-lg-0">
                        <h3 data-aos="fade-up">Mandalica siap melayani anda, dimanapun dan kapanpun.</h3>
                        <p data-aos="fade-up" data-aos-delay="100">
                            Mandalica dibangun sesuai dengan kebutuhan pasien, kami menyediakan layanan yang terbaik
                            untuk anda. Respon cepat dan lugas, sesuai dengan kebutuhan anda.
                        </p>
                        <div class="row">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-receipt"></i>
                                <h4>Pelayanan 24 Jam</h4>
                                <p>Mandalica Clinic siap melayani anda dimanapun dan kapanpun selama 24 Jam.
                                </p>
                            </div>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Pelayanan tanpa datang ke Klinik</h4>
                                <p>Selain pelayanan 24 jam, Mandalica Clinic juga menawarkan anda tidak perlu datang ke
                                    Klinik, hanya klik tombol <a href="#contact">INI</a>, tulis keluhan anda, langsung
                                    anda dihubungi oleh tim kami.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Layanan</h2>
                    <p>Di Mandalica Clinic, beberapa layanan yang kami tawarkan antara lain.</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">Swab Antigen</a></h4>
                            <p class="description">Di Mandalica Clinic, Kami menawarkan swab antigen dengan harga
                                terjangkau dengan hasil yang super cepat.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">Swab Polymerase Chain Reaction (PCR)</a></h4>
                            <p class="description">Selain Swab Antigen, Kami juga menawarkan Swab PCR dengan harga
                                terjangkau dan hasil yang sangat cepat.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-user"></i></div>
                            <h4 class="title"><a href="">Praktek Dokter</a></h4>
                            <p class="description">Praktek Dokter terbaik, tidak perlu antri dan langsung dipanggil
                                secara cepat dan instan.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-time"></i></div>
                            <h4 class="title"><a href="">Layanan 24 Jam</a></h4>
                            <p class="description">Semua layanan yang kami tawarkan bersifat 24 jam.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Contact Us Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact Us</h2>
                    <p>Contact Kami sekarang juga!</p>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Dusun Kota III, Desa Kuta, Kecamatan Pujut, Kabupaten Lombok Tengah</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p><a href="mailto:mandalicaclinic@gmail.com">Email</a></p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p><a href="https://api.whatsapp.com/send?phone=6282298298911">Whatsapp</a></p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7548.161082889268!2d116.15087706640105!3d-8.59893382286497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdb8bec05ae88f%3A0x12145982e941eb97!2sMandalika%2C%20Sandubaya%2C%20Mataram%20City%2C%20West%20Nusa%20Tenggara!5e0!3m2!1sen!2sid!4v1649907440672!5m2!1sen!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="200">
                        <form action="{{ route('setorcontact') }}" method="POST" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nama Anda</label>
                                    <input type="text" name="nama" class="form-control" id="nama"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="form-group col-md-6 mt-3 mt-md-0">
                                    <label for="name">Nomor Handphone</label>
                                    <input type="tel" class="form-control" name="email" id="email"
                                        placeholder="Nomor Whatsapp Aktif" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Subjek</label>
                                <input type="text" class="form-control" name="subjek" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Pesan</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="text-center"><button type="SUBMIT">Kirim Pesan</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Us Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Yuk Join Newsletter dari Mandalica Clinic</h4>
                        <p>Dapatkan Informasi terbaru, menarik dan seru dari Mandalica Clinic. </p>
                        <form action="#" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Mandalica Clinic</h3>
                        <p>
                            Dusun Kota III, Desa Kuta, Kecamatan Pujut, Kabupaten Lombok Tengah<br>
                            Lombok, <br>
                            Nusa Tenggara Barat <br><br>
                            <strong>Phone:</strong> <a
                                href="https://api.whatsapp.com/send?phone=6281237120303">081237120303</a><br>
                            <strong>Email:</strong> <a href="mailto:mandalicaclinic@gmail.com">Email</a><br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Swab Antigen</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Swab PCR</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Praktek Dokter</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Dibawah merupakan official platform dari kita</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Mandalica Clinic</span></strong>. | Built with ❤ by Oggie Sutrisna | All
                Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->
                Designed by <a href="/">Mandalica Clinic</a>
            </div>
        </div>
    </footer><!-- End Footer -->

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

</body>

</html>
