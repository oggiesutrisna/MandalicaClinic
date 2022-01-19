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
        <div class="card-tools">
            {{$pasiens->links()}}
        </div>
    </div>
    <div class="card-body table-responsive p-0" style="height:500px;">
        <table class="table table-head-fixed table-hover text-nowrap">
            <thead>
                <tr>
                    <th>Aksi</th>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>No Handphone</th>
                    <th>Tempat, Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Appointment</th>
                    <th>Jenis Appointment</th>
                    <th>Alamat</th>
                </tr>
                @forelse ($pasiens as $pas)
                <tbody>
                    <tr>
                        <td>
                            <a href="{{ route('pasiens.edit', $pas->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('pasiens.destroy', $pas->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button onclick="deletePasien()" type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                        <td>{{ $pas->id }}</td>
                        <td>{{ $pas->nama }}</td>
                        <td>{{ $pas->nohp }}</td>
                        <td>{{ $pas->ttl }}</td>
                        <td>{{ $pas->jeniskelamin }}</td>
                        <td>{{ $pas->dateappointment }}</td>
                        <td>{{ $pas->jenisappointment }}</td>
                        <td>{{ $pas->keterangan }}</td>
                    @empty
                    <td colspan="10" class="text-center">
                        <div class="alert alert-danger">
                            Data Kosong
                        </div>
                    </td>
                    @endforelse
                </tr>
                </tbody>
            </thead>
        </table>
    </div>
    <div class="card-footer">
        {{ $pasiens->links() }}
    </div>
</div>
<script>
    function deletePasien(id) {
        swal.fire({
                title: "Apakah anda yakin",
                text: "Setelah di dihapus, data tidak akan pernah kembali!",
                icon: "warning",
                showCancelButton: !0,
                buttons: ["Batal", "Hapus"],
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        $('#'+pasiens_id).submit();
                    }
                    else {
                        swal('Data tidak jadi dihapus');
                    }
                });
    }
</script>
@endsection
