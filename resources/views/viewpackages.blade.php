@extends('layouts.lariat')
@section('content')
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Mandalika Packages</h2>
                <p class="w-lg-50">Dapatkan Paket terbaik yang kami tawarkan di Mandalika Clinic.</p>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            @foreach ($package as $pkg)
                <div class="col-lg-4">
                    <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;"
                            src="https://source.unsplash.com/random/?nurse">
                        <div class="card-body p-4">
                            <p class="text-primary card-text mb-0">{{ $pkg->categories }}</p>
                            <a href="{{ route('showpackage', $pkg->slug) }}">
                                <h4 class="card-title">{{ $pkg->nama }}</h4>
                            </a>
                            <div class="d-flex">
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
