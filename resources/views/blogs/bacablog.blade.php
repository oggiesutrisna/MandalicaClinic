@extends('layouts.lariat')
@section('content')

<section class="py-4 py-xl-5">
    <div class="container">
        <div class="border rounded border-0 d-flex flex-column justify-content-center align-items-center p-4 py-5" style="background: linear-gradient(rgba(0,123,255,0.2), rgba(0,123,255,0.2)), url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;) center / cover;height: 500px;">
            <div class="row">
                <div class="col-md-10 col-xl-8 text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                    <div>
                        <h1 class="text-uppercase fw-bold mb-3">{{ $blog->judul }}<br></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p style="font-size: 19px;">{!! $blog->deskripsi !!}<br></p>
            <hr>
        </div>
    </div>
</div>

@endsection
