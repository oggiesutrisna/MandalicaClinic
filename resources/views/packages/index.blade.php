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
            <table id="tablepackages" class="table table-stripped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($packages as $package)
                        <tr>
                            <td>{{ $package->id }}</td>
                            <td>{{ $package->name }}</td>
                            <td>{{ $package->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
