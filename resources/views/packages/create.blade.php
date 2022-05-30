@extends('layouts.admin')
@section('title')
    Create Package
@endsection
@section('content')

    <div class="callout callout-success">
        <h5>
            Total Pesan yang terkumpul: <b>{{ DB::table('contacts')->count() }}</b>
        </h5>
        <p>
            Fitur ini ditambahkan untuk menampilkan data contact yang terkumpul dari Pengguna
        </p>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-tools">
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
        </div>
        <div class="card-body">
            <form action="{{ route('packages.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Nama Paket</label>
                    <input type="text" name="name" class="form-control" placeholder="Nama Paket">
                </div>
                <div class="form-group">
                    <label for="">Harga</label>
                    <input type="text" name="price" class="form-control" placeholder="Harga">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="editor1" class="form-control" placeholder="Deskripsi"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Gambar</label>
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
