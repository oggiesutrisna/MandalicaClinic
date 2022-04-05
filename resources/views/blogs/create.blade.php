@extends('layouts.admin')
@section('title') Buat Postingan Baru @endsection
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
        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul">
                    Judul
                </label>
                <input type="text" name="judul" placeholder="Judul Artikel" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">
                    Deskripsi
                </label>
                <textarea type="text" name="deskripsi" placeholder="Jelaskan Deskripsi Anda" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="gambar">
                    Gambar
                </label>
                <input type="file" name="gambar" accept="image/*" id="gambar" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="judul">
                    Tag
                </label>
                <input type="text" name="tag" placeholder="Bali, Vacation" class="form-control">
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
