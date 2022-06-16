@extends('layouts.admin')
@section('title')
    Preview Packages
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Preview Packages</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="nama">Nama Paket</label>
                {{ $package->nama }}
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                {{ $package->harga }}
            </div>
            <div class="form-group">
                <label for="harga">Example Slug</label>
                {{ $package->slug }}
            </div>
            <div class="form-group">
                <label for="keterangan">Deskripsi</label>
                {!! $package->keterangan !!}
            </div>
            <div class="card-footer">
                <a href="{{ route('packages.edit', $package->id) }}" class="btn btn-warning">
                    <i class="fas fa-edit"></i>
                    Edit
                </a>
                <form action="{{ route('packages.destroy', $package->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                        Hapus
                    </button>
                </form>
                <a href="{{ route('home') }}" class="btn btn-primary">
                    <i class="fas fa-arrow-left"></i>
                    Kembali
                </a>
            </div>
        </div>
    @endsection
