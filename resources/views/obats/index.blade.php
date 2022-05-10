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
                    <table id="dataTable" class="table table-bordered table-striped">
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

                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{ route('obats.create') }}" class="btn btn-primary">Tambah Obat</a>
                </div>
            </div>
            <script>
                $(function () {
                    $("dataTable1").DataTable();
                    $('dataTable').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: "{{ route('obats.datatable') }}",
                        "paging": true,
                        "lengthChange": false,
                        "searching": false,
                        "ordering": true,
                        "info": true,
                        "autoWidth": false,
                    });
                });
            </script>
        @endsection
