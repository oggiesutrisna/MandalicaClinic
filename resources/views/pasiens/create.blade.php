@extends('layouts.admin')
@section('title')
    Buat Appointment Pasien
@endsection
@section('content')

    <div class="callout callout-success">
        <h5>Buat Appointment Pasien secara manual</h5>
        <p>
            Ini adalah session buat appointment secara manual, fitur ini digunakan jikalau pasien gagal dalam membuat
            appointment di halaman utama, maka Admin yang bertanggung jawab bisa menggunakan ini untuk backup. Caranya
            hampir sama, hanya saja pilih pasien yang akan di appointment dan pilih tanggal appointment.
        </p>
    </div>

    <div class="card">
        <div class="card-header">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="card-body">
            <form action="{{ route('setorPasien') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">
                                Nama Pasien
                            </label>
                            <input type="text" name="nama" placeholder="Nama pasien" class="form-control ">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nohp">
                                Nomor Handphone
                            </label>
                            <input type="text" name="nohp" placeholder="Nomor Handphone Pasien" class="form-control"
                                required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ttl">
                                Tempat, Tanggal Lahir
                            </label>
                            <input type="text" name="ttl" placeholder="Tempat, Tanggal Lahir" class="form-control"
                                required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jeniskelamin">
                                Jenis Kelamin
                            </label>
                            <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                                <option value="Laki - Laki">
                                    Laki - Laki
                                </option>
                                <option value="Perempuan">
                                    Perempuan
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ttl">
                                Tanggal Appointment
                            </label>
                            <input type="date" name="dateappointment" placeholder="Tempat, Tanggal Lahir"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ttl">
                                Jenis Appointment
                            </label>
                            <select name="jenisappointment" id="jenisappointment" class="form-control">
                                <option value="Swab PCR">Swab PCR</option>
                                <option value="Swab Antigen">Swab Antigen</option>
                                <option value="Praktek Dokter">Praktek Dokter</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Keterangan">
                        Keterangan
                    </label>
                    <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control"></textarea>
                </div>
        </div>
        {{-- Card Body --}}
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">
                Buat Data Pasien
            </button>
            </form>
        </div>
    </div>

@endsection
