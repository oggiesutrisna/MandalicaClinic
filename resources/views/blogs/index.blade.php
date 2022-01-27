@extends('layouts.admin')
@section('title') Blogs @endsection
@section('content')

<div class="callout callout-success">
    <h5>
        Total Blog : <b>{{ DB::table('blogs')->count() }}</b>
    </h5>
    <p>
        Fitur blog merupakan fitur yang standar di setiap project yang bisa digunakan untuk membuat artikel dan akan di post menggunakaan fitur blog disini.
    </p>
</div>

<div class="card">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif


    <div class="card-header">
        <a href="{{ route('blogs.create') }}" class="btn btn-primary">
            <i class="fa fa-plus"></i> Buat Artikel
        </a>
    </div>
    <div class="card-body table-responsive p-0" style="height:500px;">
        <table class="table table-head-fixed table-hover text-nowrap">
            <thead>
                <tr>
                    <th>Aksi</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Tags</th>
                </tr>
            </thead>
            @forelse($blogs as $bs)
            <tbody>
                <tr>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('blogs.show', $bs->id) }}" class="btn btn-primary">
                                <i class="fas fa-search"></i>
                            </a>
                            <a href="{{route('blogs.edit', $bs->id) }}" class="btn btn-primary">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{route('pasiens.destroy', $bs->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button onclick="deleteBlog()" type="SUBMIT" class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                    <td>{{ $bs->judul }}</td>
                    <td>{{ $bs->deskripsi }}</td>
                    <td>{{ $bs->tags}}</td>
                    @empty
                    <td colspan="10" class="text-center">
                        <div class="alert alert-danger">
                            Data Artikel Kosong
                        </div>
                    </td>
                    @endforelse
                </tr>
            </tbody>
            <div class="card-footer">
                {{ $blogs->links() }}
            </div>
        </table>
    </div>
</div>

<script>
    function deleteBlog(id) {
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
                        $('#'+blogs_id).submit();
                    }
                    else {
                        swal('Data tidak jadi dihapus');
                    }
                });
    }
</script>

@endsection
