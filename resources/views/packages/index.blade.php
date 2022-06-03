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
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($packages as $package)
                        <tr>
                            <td>
                                <a href="{{ route('packages.show', $package->nama) }}" class="btn btn-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('packages.edit', $package->nama) }}" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('packages.destroy', $package->id) }}" method="POST"
                                    class="d-inline" onclick="deleteconfirmation">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                            <td>{{ $package->id }}</td>
                            <td>{{ $package->nama }}</td>
                            <td>{{ $package->keterangan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
