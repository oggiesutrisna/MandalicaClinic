@extends('layouts.admin')
@section('title')
    Create Package
@endsection
@section('content')

    <div class="callout callout-success">
        <h5>
            Total Packages yang dibuat: <b>{{ DB::table('packages')->count() }}</b>
        </h5>
        <p>
            Fitur ini ditambahkan untuk menampilkan data contact yang terkumpul dari Pengguna
        </p>
    </div>

    <div class="card">
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

        <div class="card-body">
            <form action="{{ route('packages.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Paket</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Paket">
                </div>
                <div class="form-group">
                    <label for="nama">Kategori</label>
                    <input type="text" name="categories" class="form-control" placeholder="Kategori Paket">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                        <input type="text" name="harga" class="form-control" placeholder="Harga">
                    </div>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" id="summernote1" class="form-control" placeholder="Deskripsi"></textarea>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <button type="SUBMIT" class="btn btn-primary">
                        <i class="fas fa-save"></i>
                        Simpan & Publish
                    </button>
                </div>
            </form>
        </div>

        <div class="card-footer">
            <a href="{{ route('packages.index') }}" class="btn btn-warning">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>
        </div>
    </div>

@endsection
