<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Praktek Dokter Mandalica</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets-view/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets-view/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets-view/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets-view/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
            <div class="login-brand">
              Praktek Dokter Bersama
            </div>

            <div class="card card-danger">
              <div class="card-header"><h4>QR Verification System | The Patient <b>{{$pasien->nama}}</b> is verified.</h4></div>

              <div class="card-body">
                  <div class="form-group">
                      <label for="nama">Nama Pasien</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-envelope"></i>
                        </div>
                      </div>
                      <input id="nama" type="nama" class="form-control" name="nama" autofocus value="{{$pasien->nama}}" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Tempat, Tanggal Lahir</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-envelope"></i>
                        </div>
                      </div>
                      <input id="nama" type="nama" class="form-control" name="nama" autofocus value="{{$pasien->ttl}}" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="nama">Tanggal Appointment ke Tempat</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-envelope"></i>
                        </div>
                      </div>
                      <input id="nama" type="nama" class="form-control" name="nama" autofocus value="{{$pasien->dateappointment}}" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nama">Tanggal Buat Appointment</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-envelope"></i>
                      </div>
                    </div>
                    <input id="nama" type="nama" class="form-control" name="nama" autofocus value="{{$pasien->created_at}}" disabled>
                  </div>
                </div>
                <div class="form-group">
                    <label for="nama">Jenis Appointment</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-envelope"></i>
                      </div>
                    </div>
                    <input id="nama" type="nama" class="form-control" name="nama" autofocus value="{{$pasien->jenisappointment}}" disabled>
                  </div>
                </div>

                  <div class="form-group text-center">
                    <a type="submit" href="/" class="btn btn-lg btn-round btn-danger">
                      Back To Home
                    </a>
                  </div>
              </div>
            </div>
            <div class="simple-footer"> <br>
                <p>
                    Copyright &copy; 2022 Praktek Dokter Mandalica
                </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('assets-view/modules/jquery.min.js')}}"></script>
  <script src="{{asset('assets-view/modules/popper.js')}}"></script>
  <script src="{{asset('assets-view/modules/tooltip.js')}}"></script>
  <script src="{{asset('assets-view/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets-view/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('assets-view/modules/moment.min.js')}}"></script>
  <script src="{{asset('assets-view/js/stisla.js')}}"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="{{asset('assets-view/js/scripts.js')}}"></script>
  <script src="{{asset('assets-view/js/custom.js')}}"></script>
</body>
</html>
