@extends('layouts.admin')
@section('title')
    Database Obat
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Database Obat</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <table id="tableobat" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Aksi</th>
                                <th>No</th>
                                <th>Nama Obat</th>
                                <th>Keterangan</th>
                                <th>Stok</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($obat as $ob)
                                <tr>
                                    <td>
                                        <a href="{{ route('obats.edit', $ob->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('obats.destroy', $ob->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ob->nama_obat }}</td>
                                    <td>{{ $ob->keterangan }}</td>
                                    <td>{{ $ob->stok_obat }}</td>
                                    <td>{{ $ob->harga_obat }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">

                </div>
            </div>
        @endsection
