@extends('layouts.admin')
@section('title')
    Show Post {{ $contact->judul }}
@endsection
@section('content')
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="nama">
                    Nama
                </label>
                <input type="nama" value="{{ $contact->nama }}" class="form-control" disabled>
            </div>
            <div class="form-group">
                <label for="email">
                    Nomor Handphone
                </label>
                <input type="text" value="{{ $contact->nohp }}" class="form-control" disabled>
            </div>
            <div class="form-group">
                <label for="email">
                    Subjek
                </label>
                <input class="form-control" type="text" value="{{ $contact->subjek }}" disabled>
            </div>
            <div class="form-group">
                <label for="email">
                    Pesan
                </label>
                <textarea class="form-control" cols="30" rows="10" disabled>{{ $contact->message }}</textarea>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <a href="{{ route('contacts.index') }}" class="btn btn-primary">
            Kembali
        </a>
    </div>
    </div>
@endsection
