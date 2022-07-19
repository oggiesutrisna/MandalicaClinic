@extends('layouts.admin')
@section('title')
    All Packages
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">All Packages</h3>
        </div>
        <div class="card-body">
            <table id="tablepackages" class="table table-stripped table-bordered nowrap">
                <thead>
                    <tr>
                        <th>Aksi</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($package as $pkg)
                        <tr>
                            <td>
                                <a href="{{ route('packages.show', $pkg->slug) }}" class="btn btn-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('packages.edit', $pkg->id) }}" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('packages.destroy', $pkg->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                            <td>{{ $pkg->id }}</td>
                            <td>{{ $pkg->nama }}</td>
                            <td>{{ $pkg->image }}</td>
                            <td>{{ $pkg->keterangan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('home') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection
