@extends('layouts.admin')
@section('title')
    Data Contact dari User
@endsection
@section('content')
    <div class="callout callout-success">
        <h5>
            Total Pesan yang terkumpul: <b>{{ DB::table('contacts')->count() }}</b>
        </h5>
        <p>
            Fitur ini ditambahkan untuk menampilkan data contact yang terkumpul dari Pengguna
        </p>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-tools">
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
        </div>
        <div class="card-body">
            <table class="table table-head-fixed table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>Aksi</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Pesan</th>
                    </tr>
                </thead>
                @forelse ($contact as $cs)
                    <tbody>
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('contacts.show', $cs->id) }}" class="btn btn-primary">
                                        <i class="fas fa-search"></i>
                                    </a>
                                    <a href="{{ route('contacts.edit', $cs->id) }}" class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('contacts.destroy', $cs->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="SUBMIT" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                            <td>{{ $cs->nama }}</td>
                            <td>{{ $cs->email }}</td>
                            <td>{{ $cs->pesan }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">
                                Data Kosong
                            </td>
                        </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $contact->links() }}
        </div>
    </div>
@endsection
