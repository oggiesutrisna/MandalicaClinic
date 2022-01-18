@extends('layouts.admin')
@section('title') Data Appointment Pasien @endsection
@section('content')

<div class="card">
    <div class="card-header">
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
    <div class="card-body">
        <table class="table table-responsive table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>No Handphone</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No Telp</th>
                    <th>Aksi</th>
                </tr>
                @forelse ($pasiens as $pas)
                <tbody>
                    <tr>
                        <td>{{ $pas->id }}</td>
                        <td>{{ $pas->nama }}</td>
                        <td>{{ $pas->nohp }}</td>
                        <td>{{ $pas->ttl }}</td>
                        <td>{{ $pas->jeniskelamin }}</td>
                        <td>{{ $pas->dateappointment }}</td>
                        <td>{{ $pas->jenisappointment }}</td>
                        <td>{{ $pas->keterangan }}</td>
                        <td>
                            <a href="{{ route('pasiens.edit', $pas->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('pasiens.destroy', $pas->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    @empty
                    <td>
                        <div class="alert alert-danger">
                            Data Pasien Kosong
                        </div>
                    </td>
                    @endforelse
                </tr>
                </tbody>
            </thead>
        </table>
    </div>
</div>
@endsection
