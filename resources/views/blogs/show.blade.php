@extends('layouts.admin')
@section('title')
    Show Post {{ $blog->judul }}
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="gambar">
                    Gambar
                </label>
                <img src="{{ asset('storage/' . $blog->gambar) }}" alt="file tidak di upload" width="512" height="512">
            </div>
            <div class="form-group">
                <label for="judul">
                    Judul
                </label>
                <input type="text" value="{{ $blog->judul }}" class="form-control" disabled>
            </div>
            <div class="form-group">
                <label for="deskripsi">
                    Deskripsi
                </label>
                <input type="text" value="{{ $blog->deskripsi }}" class="form-control" disabled>
            </div>
            <div class="form-group">
                <label for="label">
                    Label
                </label>
                <input type="text" value="{{ $blog->label }}" class="form-control" disabled>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('blogs.index') }}" class="btn btn-primary">
                Kembali
            </a>
        </div>
    </div>
@endsection
