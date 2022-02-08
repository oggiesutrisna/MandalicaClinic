@extends('layouts.admin')
@section('title') Buat Postingan Baru @endsection
@section('content')

<div class="callout callout-success">
    <h5>
        Total Blog yang terbit : <b>{{DB::table('blogs')->count() }}</b>
    </h5>
    <p>
        Version One.Three - Blog Feature Added | The blog feature is a feature that writers can use to write some of today's most popular pieces.
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
    <div class="card-body table-responsive p-0" style="height:500px;">
        <table class="table table-head-fixed table-hover text-nowrap">
            <thead>
                <tr>
                    <th>Aksi</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            @forelse ($blogs as $bs)
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
                                <form action="{{route('blogs.destroy', $bs->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="deletePasien()" type="SUBMIT" class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                        <td>{{$bs->judul}}</td>
                        <td>{{$bs->deskripsi}}</td>
                    </tr>
                </tbody>
            @empty
            <td colspan="3" class="text-center">
                <div class="alert alert-danger">
                    Artikel blog kosong / Bersih (?)
                </div>
            </td>
            @endforelse
        </table>
    </div>
    <div class="card-footer">
        {{ $blogs->links() }}
    </div>
</div>

@endsection
