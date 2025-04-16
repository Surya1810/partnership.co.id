@extends('layout.app')

@section('title')
    Our Client
@endsection

@push('css')
@endpush

@section('content')
    <!-- Judul -->
    <section class="container_border">
        <div class="container h-100 p-5">
            <div class="row align-items-center h-100">
                <div class="col-12 text-center text-white">
                    <h1><strong>Our Clients</strong></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Judul -->
    <section class="s-line-hr-top" style="min-height: 100svh;background-color: #fff">
        <div class="container">
            <div class="row g-5 d-flex justify-content-center pt-3 pb-5 w-100">
                @foreach ($clients as $data)
                    <div class="col-3 col-md-2">
                        <img src="{{ asset('assets/img/' . $data->logo) }}" alt="{{ $data->name }}"
                            style="width: 100%;height: 100%">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
