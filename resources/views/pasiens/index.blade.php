@extends('layouts.admin')
@section('title')
    Data Appointment Pasien
@endsection
@section('content')

    <div class="callout callout-success">
        <h5>
            Total Pasien : <b>{{ DB::table('pasiens')->count() }}</b>
        </h5>
        <p>
            ketika pasien sudah mendaftar appointment,
            identitas lengkap dari pasien akan terlihat disini.
            Dan juga untuk status dari pasiennya apakah sudah ditangani
            atau belum akan terlihat disini juga. Untuk format dari pasien
            buat appointment (Tahun - Bulan - Tanggal masih menggunakan format US) Data pasien
            sudah <b>terenkripsi</b> dan tidak dapat diakses oleh orang lain.
            Setiap pasien memiliki QR Code disini ketika di scan akan memperlihatkan
            identitas pasien secara lengkap.
        </p>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <div class="card-tools">
                @include('partials.flash-message')
            </div>
        </div>
        <div class="card-body">
            <table id="pasientable" class="table table-stripped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Buat Appointment</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pasiens as $pasien)
                        <tr>
                            <td>{{ $pasien->id }}</td>
                            <td>{{ $pasien->nama }}</td>
                            <td>{{ $pasien->ttl }}</td>
                            <td>{{ $pasien->jeniskelamin }}</td>
                            <td>{{ $pasien->dateappointment }}</td>
                            <td>{{ $pasien->alamat }}</td>
                            <td>{{ $pasien->status }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('pasiens.show', $pasien->id) }}" class="btn btn-primary">
                                        <i class="fas fa-search"></i>
                                    </a>
                                    <a href="{{ route('pasiens.edit', $pasien->id) }}" class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('pasiens.destroy', $pasien->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="SUBMIT" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
            </table>
        </div>
        <div class="card-footer">

        </div>
    </div>
    <script>
        function deletePasien($id) {
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
                        $('#' + pasiens_id).submit();
                    } else {
                        swal('Data tidak jadi dihapus');
                    }
                });
        }
    </script>
@endsection
