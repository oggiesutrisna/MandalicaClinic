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
                <img src="{{ asset('storage/blog' . $blog->gambar) }}" alt="image" width="256"
                    height="256">
            </div>
            <div class="form-group">
                <label for="deskripsi">
                    Deskripsi
                </label>
                <textarea type="text" cols="30" rows="10" class="form-control" disabled>{{ $blog->deskripsi }}
                </textarea>
            </div>
            <div class="form-group">
                <label for="judul">
                    Judul
                </label>
                <input type="text" value="{{ $blog->judul }}" class="form-control" disabled>
            </div>
            <div class="form-group">
                <label for="judul">
                    Slug
                </label>
                <input type="text" value="{{ $blog->slug }}" class="form-control" disabled>
            </div>
            <div class="form-group">
                <label for="label">
                    Tag
                </label>
                <input type="text" value="{{ $blog->tag }}" class="form-control" disabled>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('blogs.index') }}" class="btn btn-primary">
                Kembali
            </a>
        </div>
    </div>
@endsection
