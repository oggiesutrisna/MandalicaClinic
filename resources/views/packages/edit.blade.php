@extends('layouts.admin')
@section('title')
    Edit Package
@endsection
@section('content')

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
            <form action="{{ route('packages.update', $package->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Nama Paket</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Paket"
                        value="{{ $package->nama }}">
                </div>
                <div class="form-group">
                    <label for="">Harga</label>
                    <input type="text" name="harga" class="form-control" placeholder="Harga"
                        value="{{ $package->harga }}">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="summernote1" class="form-control">
                        {{ $package->deskripsi }}
                    </textarea>
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
