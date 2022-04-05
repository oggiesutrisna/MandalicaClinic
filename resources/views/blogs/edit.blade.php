@extends('layouts.admin')
@section('title')
    Edit Artikel "{{ $blog->judul }}"
@endsection
@section('content')

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
            <form action="{{ route('blogs.update', $blog->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="judul">
                        Judul
                    </label>
                    <input type="text" name="judul" placeholder="Judul Artikel" class="form-control"
                        value="{{ $blog->judul }}" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">
                        Deskripsi
                    </label>
                    <textarea type="text" name="deskripsi" placeholder="Jelaskan Deskripsi Anda" class="form-control"
                        required>{{ $blog->deskripsi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="gambar">
                        Gambar
                    </label>
                    <input type="file" name="gambar" accept="image/*" id="gambar" class="form-control"
                        value="{{ $blog->gambar }}" required>
                </div>
                <div class="form-group">
                    <label for="judul">
                        Label
                    </label>
                    <input type="text" name="tag" value="{{ $blog->label }}" placeholder="Bali, Vacation"
                        class="form-control">
                </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" type="SUBMIT">
                Post Artikel Anda
            </button>
            <a href="{{ route('blogs.index') }}" class="btn btn-success">
                Kembali
            </a>
        </div>
        </form>
    </div>

@endsection
