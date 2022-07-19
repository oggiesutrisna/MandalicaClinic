@extends('layouts.admin')
@section('title')
    Buat Postingan Baru
@endsection
@section('content')

    <div class="callout callout-success">
        <h5>
            Total Blog yang terbit : <b>{{ DB::table('blogs')->count() }}</b>
        </h5>
        <p>
            Fitur blog ditambahkan untuk menambahkan portal berita terbaru di Mandalica
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
            <table id="tableblog" class="table table-stripped table-bordered">
                <thead>
                    <tr>
                        <th>Aksi</th>
                        <th>Judul</th>
                        <th>Slug</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                @foreach ($blog as $bs)
                    <tbody>
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('blogs.show', $bs->id) }}" class="btn btn-primary">
                                        <i class="fas fa-search"></i>
                                    </a>
                                    <a href="{{ route('blogs.edit', $bs->id) }}" class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('blogs.destroy', $bs->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="SUBMIT" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                            <td>{{ $bs->judul }}</td>
                            <td>{{ $bs->slug }}</td>
                            <td>{{ $bs->deskripsi }}</td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
        <div class="card-footer">

        </div>
    </div>

@endsection
