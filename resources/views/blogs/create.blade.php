@extends('layouts.admin')
@section('title')
    Buat Postingan Baru
@endsection
@section('content')

    <div class="card">
        <div class="card-header">
            {{-- Input Error Display --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- End Input Error Display --}}
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
                    <textarea id="summernote" name="deskripsi" required>
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="Gambar">
                        Upload Gambar
                    </label>
                    <input type="file" name="gambar" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="judul">
                        Tag
                    </label>
                    <select id="select2" class="form-control select2" data-placeholder="select a tag" multiple="multiple">
                        <option value="Mandalica">Mandalika</option>
                        <option value="Mandalika Klinik">Mandalika Clinic</option>
                        <option value="Bali">Bali</option>
                        <option value="News/Berita">News/Berita</option>
                        <option value="Tips-Trick">Tips-Trick</option>
                        <option value="Penyakit/Disease">Penyakit/Disease</option>
                        <option value="Rabies/Rabies Vaccine">Rabies/Rabies Vaccine</option>
                        <option value="Nusa Tenggara Barat">Penyakit/Disease</option>
                        <option value="Pengobatan/Medicine">Pengobatan/Medicine</option>
                    </select>
                </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" type="SUBMIT">
                Buat Postingan
            </button>
            <a href="{{ route('blogs.index') }}" class="btn btn-success">
                Kembali
            </a>
        </div>
        </form>
    </div>

@endsection
