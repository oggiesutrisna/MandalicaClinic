@extends('layouts.admin')
@section('title')
    Buat Data Obat
@endsection
@section('content')
    <div class="callout callout-success">
        <h5>Data Obat</h5>
        <p>
            Ini adalah session buat data obat, fitur ini digunakan jikalau anda ingin mendata obat baru.
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
            <form action="{{ route('obats.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">
                                Nama Obat
                            </label>
                            <input type="text" name="nama" placeholder="Nama obat" class="form-control @if ($errors->has('nama')) is-invalid @endif" value="{{ old('nama') }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">
                                Kode Obat
                            </label>
                            <input type="text" name="kode_obat" placeholder="Nama obat" class="form-control @if ($errors->has('kode_obat')) is-invalid @endif" value="{{ old('kode_obat') }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">
                                Jenis Obat
                            </label>
                            <select class="form-control @if ($errors->has('jenis_obat')) is-invalid @endif" id="jenis_obat">
                                <option value="Obat Cair">Obat Cair</option>
                                <option value="Tablet">Tablet</option>
                                <option value="Kapsul">Kapsul</option>
                                <option value="Obat Oles">Obat Oles</option>
                                <option value="Suppositoria">Suppositoria</option>
                                <option value="Obat Tetes">Obat Tetes</option>
                                <option value="Inhaler">Inhaler</option>
                                <option value="Obat Suntik">Obat Suntik</option>
                                <option value="Obat Tempel">Implan / Obat Tempel</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="stok_obat">Stok Obat</label>
                            <input type="number" class="form-control @if($errors->has('stok_obat')) is-invalid @endif" name="stok_obat" value="{{ old('stok_obat') }}" placeholder="Stok obat">
                        </div>
                        <div class="form-group ">
                            <label for="stok_obat">Harga Obat</label>
                            <input type="number" class="form-control @if ($errors->has('harga_obat')) is-invalid @endif" name="harga_obat" value="{{ old('harga_obat') }}" placeholder="Harga obat" value="{{ old('harga_obat') }}" name="stok_obat" id="stok_obat">
                        </div>
                        <div class="form-group">
                            <label for="Keterangan">
                                Keterangan (Optional)
                            </label>
                            <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control @if ($errors->has('keterangan')) is-invalid @endif" placeholder="Keterangan">{{ old('keterangan') }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

@endsection
