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
        {{$dataTable->table()}}
    </div>
</div>

@push('scripts')

<script src="{{asset('assets-backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets-backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets-backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets-backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.1/css/buttons.dataTables.min.css">

{!! $dataTable->scripts() !!}

@endpush
@endsection
