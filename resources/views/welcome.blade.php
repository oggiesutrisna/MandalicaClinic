<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Praktek Dokter Mandalica</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets-frontend/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets-frontend/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="{{asset('assets-frontend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets-frontend/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets-frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets-frontend/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets-frontend/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets-frontend/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets-frontend/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets-frontend/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets-frontend/css/style.css')}}" rel="stylesheet">


</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:mandalicaclinic@gmail.com"> Email Us </a>
        <i class="bi bi-phone"></i> Contact Us : +62 857-8-878-878
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="{{route('login')}}" class="#"><i class="fas fa-sign-in-alt"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">Praktek Dokter Mandalika</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link" href="{{route('login')}}">Admin Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Siap Melayani anda.</h1>
      <h2>Ready for anything ready for oncalls</h2>
      <a href="#about" class="btn-get-started scrollto">GET STARTED</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    @include('sweetalert::alert')
    <section class="throwerror">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </section>


    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Kenapa Memilih PD Mandalica?</h3>
              <p>
                Praktek Dokter Mandalica adalah salah satu perusahaan yang bergerak di bidang pelayanan kesehatan. Pelayanan yang tidak pernah terlewatkan dari Praktek Dokter Mandalica adalah pelayanan kesehatan yang terbaik.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn"> Pelajari Selengkapnya <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Swab Antigen dengan hasil cepat</h4>
                    <p>Dengan menggunakan sistem rapid, anda tidak perlu menunggu lama hingga hasil swab anda selesai</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Masuk ke PeduliLindungi</h4>
                    <p>Ketika anda sudah swab antigen, status dari swab antigen anda sudah langsung masuk ke PeduliLindungi</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>24/7 Pelayanan Call Center </h4>
                    <p>24/7 Call Center 24 Jam</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Layanan</h2>
          <p>Praktek Dokter Mandalica menawarkan Layanan yang bisa digunakan untuk para calon pasien nantinya, Diantaranya adalah</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4><a href="">Paket Rapid Swab Antigen</a></h4>
              <p>Di Praktek Dokter Mandalica kami menerima, Rapid Swab Antigen dengan hasil 24 Jam langsung cair dan langsung masuk ke PeduliLindungi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4><a href="">Paket Swab PCR</a></h4>
              <p>Di Praktek Dokter Mandalica, selain kami menerima swab Antigen, kami juga menerima Swab PCR dengan hasil 24 Jam langsung cair dan langsung masuk ke PeduliLindungi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4><a href="">Praktek Dokter</a></h4>
              <p>Di Praktek Dokter Mandalica, Selain kita servis PCR dan Antigen, kami juga menerima OnCall 24 Jam Praktek Dokter yang akan datang langsung kerumah.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Appointment</h2>
          <p>Ingin Swab Antigen tanpa harus ribet? Buat Appointment sekarang juga</p>
        </div>

        <form action="{{route('pasiens.store')}}" method="POST" enctype="multipart/formdata" role="form">
            @csrf
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap Anda" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="ttl" id="ttl" placeholder="Tempat Tanggal Lahir" data-rule="ttl" data-msg="Format : Tempat, Tanggal Lahir - Bulan Lahir - Tahun Lahir" required>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="nohp" id="nohp" placeholder="Nomor Handphone Aktif" data-rule="minlen:4" data-msg="Nomor Handphone anda harus aktif" required>
              <div class="validate"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="datetime" name="dateappointment" class="form-control datepicker" id="date" placeholder="Tanggal Appointment" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="jeniskelamin" id="jeniskelamin" class="form-select" required>
                <option value="">Jenis Kelamin</option>
                <option value="Laki-Laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="jenisappointment" id="jenisapppointment" class="form-select" required>
                <option value="">Jenis Pemeriksaan</option>
                <option value="Swab Antigen">Swab Antigen</option>
                <option value="Swab PCR">Swab PCR</option>
                <option value="Konsultasi Dokter">Konsultasi Dokter</option>
              </select>
              <div class="validate"></div>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="keterangan" id="keterangan" rows="5" placeholder="Keterangan Lainnya (Required)"></textarea>
            <div class="validate"></div>
          </div> <br>
          <div class="text-center"><button type="submit" class="btn btn-danger">Buat Appointment</button></div>
        </form>

      </div>
    </section>

    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Kontak</h2>
          <p>Masih ada yang perlu ditanyakan? Langsung kontak kami yang sudah tertera di bawah untuk keterangan lebih lanjuts</p>
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="row mt-3">
            <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55s</p>
                </div>

              </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Praktek Dokter Mandalica</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Oncall 24/7 </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Praktek Dokter</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Praktek Dokter Mandalica</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Built with 💖 by <a href="twitter.com/@oggiesutrisna">Syntak</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="{{asset('assets-frontend/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('assets-frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets-frontend/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets-frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets-frontend/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets-frontend/js/main.js')}}"></script>

</body>

</html>
