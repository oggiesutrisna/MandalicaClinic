@extends('layouts.admin')
@section('title') Edit Data Pasien {{$pasien->nama}} @endsection
@section('content')

<div class="card card-warning">
    <div class="card-header">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>
    <form action="{{route('pasiens.update', $pasien->id)}}" Method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nama">Nama Pasien</label>
                        <input type="text" name="nama" class="form-control form-control-border" id="nama" placeholder="Nama Pasien" value="{{ $pasien->nama }}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nama">Nomor Handphone</label>
                        <input type="text" name="nohp" class="form-control form-control-border" id="nohp" value="{{ $pasien->nohp }}" disabled>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nama">Tempat, Tanggal Lahir (YYYY-MM-DD) </label>
                        <input type="text" name="ttl" class="form-control form-control-border" id="ttl" value="{{ $pasien->ttl }}" disabled>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nama">Jenis Kelamin</label>
                        <input type="text" name="jeniskelamin" class="form-control form-control-border" id="jeniskelamin" value="{{ $pasien->jeniskelamin }}" disabled>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nama">Tanggal Appointment</label>
                        <input type="text" name="dateappointment" class="form-control form-control-border" id="dateappointment" value="{{ $pasien->dateappointment }}" disabled>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="jenisappointment">Jenis Appointment</label>
                        <input type="text" name="jenisappointment" class="form-control form-control-border" id="jenisappointment" value="{{ $pasien->jenisappointment }}" disabled>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="jenisappointment">Keterangan</label>
                <textarea type="text" name="keterangan" class="form-control form-control-border" rows="5" id="keterangan" disabled>{{ $pasien->keterangan }}</textarea>
            </div>
    </div>
    <div class="card-footer">
        <button class="btn btn-primary" type="SUBMIT">Update Data Pasien</button>
        <a href="{{route('pasiens.index')}}" class="btn btn-warning" type="submit">Kembali</a>
    </div>
</form>
</div>
@endsection
