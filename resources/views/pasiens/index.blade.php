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
        <div class="card-body table-responsive p-0" style="height:500px;">
            <table class="table table-head-fixed table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Aksi</th>
                        <th>QR</th>
                        <th>Nama Pasien</th>
                        <th>No Handphone</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Appointment</th>
                        <th>Jenis Appointment</th>
                    </tr>
                    @forelse ($pasiens as $pas)
                <tbody>
                    <tr>
                        <td>{{ $pas->id }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('pasiens.show', $pas->id) }}" class="btn btn-primary">
                                    <i class="fas fa-search"></i>
                                </a>
                                <a href="{{ route('pasiens.edit', $pas->id) }}" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('pasiens.destroy', $pas->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="deletePasien()" type="SUBMIT" class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                        <td>
                            <div class="card px-2 py-2">
                                <img src="data:image/png;base64, {!! base64_encode(
    QrCode::format('png')->size(100)->generate(route('pasiens.show', $pas->id)),
) !!}" alt="QR Code" width="100px"
                                    height="100px">
                            </div>
                        </td>
                        <td>{{ $pas->nama }}</td>
                        <td>{{ $pas->nohp }}</td>
                        <td>{{ $pas->ttl }}</td>
                        <td>{{ $pas->jeniskelamin }} </td>
                        <td>{{ $pas->dateappointment }} </td>
                        <td>{{ $pas->jenisappointment }} </td>
                    @empty
                        <td colspan="10" class="text-center">
                            <div class="alert alert-danger">
                                Data Pasien Kosong / Bersih (?)
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
