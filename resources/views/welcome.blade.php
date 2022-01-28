<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Praktek Dokter Bersama Mandalica</title>
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
          <a href="mailto:mandalicaclinic@gmail.com">
            <h6>Contact Us</h6>
        </a>
        <a href="https://wa.me/send?phone=6282298298911">
            <h6>Call Center Mandalica</h6>
        </a>
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
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link" href="{{ route('login')}}">Admin Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1 style="text-shadow: 2px 2px 4px #000000;">Layanan 24 Jam</h1>
      <h2 style="text-shadow: 2px 2px 2px #FFF;">Tes Swab Antigen dan PCR hingga Konsultasi Dokter</h2>
      <a href="#about" class="btn-get-started scrollto" style="box-shadow: 2px 2px 4px #000000;">Buat Appointment</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    @include('sweetalert::alert')
    <section class="throw-error">
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
              <input type="datetime-picker" class="form-control" name="ttl" id="ttl" placeholder="Tempat Tanggal Lahir" data-rule="ttl" data-msg="Format : Tempat, Tanggal Lahir - Bulan Lahir - Tahun Lahir" required>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="nohp" id="nohp" placeholder="Nomor Handphone Aktif" data-rule="minlen:4" data-msg="Nomor Handphone anda harus aktif" required>
              <div class="validate"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="datetime-local" name="dateappointment" class="form-control datepicker" id="date" placeholder="Tanggal Appointment" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
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
          <p>Masih ada yang perlu ditanyakan? Langsung kontak kami yang sudah tertera di bawah untuk keterangan lebih lanjut</p>
        </div>
      </div>

      <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1393.6894924488104!2d116.27472754989766!3d-8.88432631619669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcda9d023837449%3A0x5030bfbcaf7dc00!2sKuta%2C%20Pujut%2C%20Central%20Lombok%20Regency%2C%20West%20Nusa%20Tenggara!5e0!3m2!1sen!2sid!4v1643002631596!5m2!1sen!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>

      <div class="container">
        <div class="row mt-3">
            <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Dusun Kuta III, Desa Kuta, Kecamatan Pujut, Kabupaten Lombok Tengah</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>mandalicaclinic@gmail.com</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+62 812 371 203 03 </p>
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
                Dusun Kuta III, Desa Kuta,  <br>
                Kecamatan Pujut,<br>
              Kabupaten Lombok Tengah<br><br>
              <strong>Phone:</strong> <a href="https://wa.me/send?phone=6282298298911">Call Center Mandalica</a><br>
              <strong>Email:</strong>mailto:mandalicaclinic@gmail.com<br>
            </p>
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
          &copy; Copyright 2022 <strong><span>Praktek Dokter Mandalica</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Built with 💖 by <a href="https://twitter.com/@oggiesutrisna">Oggie Sutrisna</a>
        </div>
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
