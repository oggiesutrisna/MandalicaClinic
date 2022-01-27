@extends('layouts.admin')
@section('title') Buat Artikel @endsection
@section('content')

<div class="card card-primary">
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
    <form action="{{route('blogs.store')}}">
        <div class="card-body">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" placeholder="Judul Artikel" required>
            </div>
            <div class="form-group">
                <label for="tags">Tags</label>
                <input type="text" name='tags' class="form-control" placeholder="Tags" required>
            </div>
            <div class="form-group">
                <textarea name="deskripsi" class="summernote" id="summernote">
                    Buat sebuah text
                </textarea>
            </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </div>
    </form>
</div>

@push('scripts')
<script src="{{asset('assets-backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $(function() {
        $('.summernote').summernote()
    })
</script>
@endpush

@endsection
