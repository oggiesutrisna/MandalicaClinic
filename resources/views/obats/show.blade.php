@extends('layouts.admin')
@section('title') Database Obat @endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Database Obat</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="nama">Nama Obat</label>
            <input type="text" class="form-control" id="nama_obat" value="{{ $obats->nama_obat }}" disabled>
        </div>
        <div class="form-group">
            <label for="nama">Kode Obat</label>
            <input type="text" class="form-control" id="kode_obat" value="{{ $obats->kode_obat }}" disabled>
        </div>
        <div class="form-group">
            <label for="nama">Stok Obat</label>
            <input type="text" class="form-control" id="kode_obat" value="{{ $obats->stok_obat }}" disabled>
        </div>
        <div class="form-group">
            <label for="nama">Jenis Obat</label>
            <input type="text" class="form-control" id="jenis_obat" value="{{ $obats->jenis_obat }}" disabled>
        </div>
        <div class="form-group">
            <label for="nama">Keterangan</label>
            <textarea class="form-control" disabled>{{ $obats->keterangan }}</textarea>
        </div>
    </div>
    <div class="card-footer">
        <a href="{{ route('obats.index') }}" class="btn btn-primary">Kembali</a>
    </div>
</div>
@endsection
