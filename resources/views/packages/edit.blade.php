@extends('layouts.admin')
@section('title')
    Edit Package
@endsection
@section('content')

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
            <form action="{{ route('packages.update', $package->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Nama Paket</label>
                    <input type="text" name="name" class="form-control" placeholder="Nama Paket"
                        value="{{ $package->name }}">
                </div>
                <div class="form-group">
                    <label for="">Harga</label>
                    <input type="text" name="price" class="form-control" placeholder="Harga"
                        value="{{ $package->price }}">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="editor1" class="form-control"
                        placeholder="Deskripsi">{{ $package->description }}</textarea>
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
