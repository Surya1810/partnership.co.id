@extends('layout.app')

@section('title')
    Workshop
@endsection

@push('css')
    <style type="text/css">
        #partnerworkshop #cover img {
            width: 100%;
        }

        #partnerworkshop #featured .wrapper {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 0 20px;
            padding: 15px 0;
        }

        #partnerworkshop #featured .col {}

        #partnerworkshop #featured .col a {
            display: block;
            margin: auto;
        }

        #partnerworkshop #featured .col div {
            text-align: center;
            margin-top: 20px;
            padding: 0 30px;
            font-weight: bold;
        }

        #partnerworkshop #featured .col a {
            height: auto;
            width: 100%;
            margin: 0;
            text-align: center;
        }

        #partnerworkshop #featured .col img {
            width: 160px;
            height: auto;
            object-fit: cover;
            object-position: center;
            transition: .2s;
        }

        #partnerworkshop #featured:hover .col img {
            opacity: .8;
        }

        #partnerworkshop #featured .col img:hover {
            bottom: -10px;
            opacity: 1;
        }

        #gallery {
            padding: 20px;
        }

        #gallery a {
            display: block;
            width: 100%;
            padding-top: 135%;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            border-radius: 20px;
        }

        @media(max-width: 768px) {
            #partnerworkshop #featured .wrapper {
                grid-template-columns: repeat(2, 1fr);
                grid-gap: 20px 10px;
            }

            #partnerworkshop #featured .col {
                padding: 0;
            }

            #partnerworkshop #featured .col:nth-child(3) {
                grid-column: 1/3;
            }

            #partnerworkshop #featured .col div {
                padding: 0 10px;
            }

            #partnerworkshop #featured .col img {
                width: 100px;
            }
        }

        #map {
            display: block;
            background: url(/assets/img/workshop/map_2.png) no-repeat center center;
            background-size: cover;
            width: 100%;
            padding-top: 85%;
            box-shadow: inset 0 5px 0 rgba(0, 0, 0, .1), inset 0 -5px 0 rgba(0, 0, 0, .1);
        }
    </style>
@endpush

@section('content')
    <!-- Judul -->
    <section class="container_border position-relative">
        <div class="container h-100 p-5">
            <div class="row align-items-center h-100">
                <div class="col-12 text-center text-white">
                    <img src="{{ asset('assets/img/logo/light/' . $products->logo) }}" alt="{{ $products->name }}"
                        class="w-50">
                </div>
            </div>
        </div>
        <a href="{{ route('product.detail', $prevId) }}"
            class="position-absolute top-50 start-0 translate-middle-y text-white px-3 fs-2 ms-3">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <a href="{{ route('product.detail', $nextId) }}"
            class="position-absolute top-50 end-0 translate-middle-y text-white px-3 fs-2 me-3">
            <i class="fa-solid fa-arrow-right"></i>
        </a>
    </section>
    <section id="partnerworkshop" style="background-color: #fff">
        <figure id="cover">
            <a href="https://wa.me/+6282126000126" target="_Blank"><img
                    src="{{ asset('assets/img/workshop/cvr_2.png') }}" /></a>
        </figure>
        <div id="featured">
            <div class="wrapper clear">
                <div class="col">
                    <a href="https://wa.me/+6282126000126"><img src="{{ asset('assets/img/workshop/pw_1.png') }}" /></a>
                    <div>Anda tidak perlu repot repot untuk order ke kita, anda hanya memilih kompenen saja nanti kami
                        kirim </div>
                </div>
                <div class="col">
                    <a href="https://wa.me/+6282126000126"><img src="{{ asset('assets/img/workshop/pw_3.png') }}" /></a>
                    <div>Tidak perlu khawatir karna kami berani dalam memberikan garansi akan produk yang kami buat,
                        berbeda dengan provider lainya</div>
                </div>
                <div class="col">
                    <a href="https://wa.me/+6282126000126"><img src="{{ asset('assets/img/workshop/pw_2.png') }}" /></a>
                    <div>Kualitas Harga kami selalu ungggul dari provider lain, karena kami mempunyai daya dukung
                        peralatan yang lengkap dan memadai sesuai standar dan kami memiliki jam terbang yang tinggi dan
                        sudah riset kompetitor Lainya, serta dapat menyesuaikan anggaran anda </div>
                </div>

            </div>
        </div>
    </section>
    <div class="wrapper clear" style="background-color: #fff">
        <article>
            <div id="gallery" class="row g-3">
                <div class="col-4">
                    <a class="lightbox" title="Partnership" href="{{ asset('assets/img/workshop/1.png') }}"
                        style="background-image:url('/assets/img/workshop/1.png');"></a>
                </div>
                <div class="col-4">
                    <a class="lightbox" title="Partnership" href="{{ asset('assets/img/workshop/2.png') }}"
                        style="background-image:url('/assets/img/workshop/2.png');"></a>
                </div>
                <div class="col-4">
                    <a class="lightbox" title="Partnership" href="{{ asset('assets/img/workshop/3.png') }}"
                        style="background-image:url('/assets/img/workshop/3.png');"></a>
                </div>
                <div class="col-4">
                    <a class="lightbox" title="Partnership" href="{{ asset('assets/img/workshop/4.png') }}"
                        style="background-image:url('/assets/img/workshop/4.png');"></a>
                </div>
                <div class="col-4">
                    <a class="lightbox" title="Partnership" href="{{ asset('assets/img/workshop/5.png') }}"
                        style="background-image:url('/assets/img/workshop/5.png');"></a>
                </div>
                <div class="col-4">
                    <a class="lightbox" title="Partnership" href="{{ asset('assets/img/workshop/6.png') }}"
                        style="background-image:url('/assets/img/workshop/6.png');"></a>
                </div>
                <div class="col-4">
                    <a class="lightbox" title="Partnership" href="{{ asset('assets/img/workshop/7.png') }}"
                        style="background-image:url('/assets/img/workshop/7.png');"></a>
                </div>
                <div class="col-4">
                    <a class="lightbox" title="Partnership" href="{{ asset('assets/img/workshop/8.png') }}"
                        style="background-image:url('/assets/img/workshop/8.png');"></a>
                </div>
                <div class="col-4">
                    <a class="lightbox" title="Partnership" href="{{ asset('assets/img/workshop/9.png') }}"
                        style="background-image:url('/assets/img/workshop/9.png');"></a>
                </div>
            </div>
        </article>
    </div>
    </section>
    <a id="map" class="popup"
        href="https://www.google.com/maps/search/Jl.+Cikutra+No.+171/@-6.8957498,107.6412886,17z/data=!3m1!4b1"
        target="_Blank"></a>

    <div class="container">
        {{-- Plakat Perbakin --}}
        <div class="row g-2 mb-2">
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/plakat/1.jpg') }}" alt="Plakat"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/plakat/2.jpg') }}" alt="Plakat"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/plakat/3.jpg') }}" alt="Plakat"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/plakat/4.jpg') }}" alt="Plakat"
                    style="width: 100%;height: 100%">
            </div>
        </div>

        {{-- Plakat Perbakin --}}
        <div class="row g-2 mb-2">
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/plakat/tali-1.jpg') }}" alt="Plakat"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/plakat/tali-2.jpg') }}" alt="Plakat"
                    style="width: 100%;height: 100%">
            </div>

            <div class="col-6">
                <img src="{{ asset('assets/img/photo/workshop/plakat/sespim-1.jpg') }}" alt="Plakat"
                    style="width: 100%;height: 100%">
            </div>
        </div>

        {{-- Neon Box --}}
        <div class="row g-2 mb-2">
            <div class="col-4">
                <img src="{{ asset('assets/img/photo/workshop/neon box/serumah-1.jpg') }}" alt="Neon Box"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-4">
                <img src="{{ asset('assets/img/photo/workshop/neon box/serumah-2.jpg') }}" alt="Neon Box"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-4">
                <img src="{{ asset('assets/img/photo/workshop/neon box/serumah-4.jpg') }}" alt="Neon Box"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-6">
                <img src="{{ asset('assets/img/photo/workshop/neon box/serumah-5.jpg') }}" alt="Neon Box"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-6">
                <img src="{{ asset('assets/img/photo/workshop/neon box/serumah-3.jpg') }}" alt="Neon Box"
                    style="width: 100%;height: 100%">
            </div>
        </div>

        {{-- Neon Box --}}
        <div class="row g-2 mb-2">
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/neon box/osha-1.jpg') }}" alt="Neon Box"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/neon box/osha-2.jpg') }}" alt="Neon Box"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/neon box/osha-4.jpg') }}" alt="Neon Box"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/neon box/osha-4.jpg') }}" alt="Neon Box"
                    style="width: 100%;height: 100%">
            </div>
        </div>

        {{-- Neon Box --}}
        <div class="row g-2 mb-2">
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/neon box/lain-1.jpg') }}" alt="Neon Box"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/neon box/lain-2.jpg') }}" alt="Neon Box"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/neon box/lain-3.jpg') }}" alt="Neon Box"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/neon box/lain-8.jpg') }}" alt="Neon Box"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-4">
                <img src="{{ asset('assets/img/photo/workshop/neon box/lain-4.jpg') }}" alt="Neon Box"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-4">
                <img src="{{ asset('assets/img/photo/workshop/neon box/lain-5.jpg') }}" alt="Neon Box"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-4">
                <img src="{{ asset('assets/img/photo/workshop/neon box/lain-6.jpg') }}" alt="Neon Box"
                    style="width: 100%;height: 100%">
            </div>
        </div>

        {{-- Neon Flex --}}
        <div class="row g-2 mb-2">
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/neon flex/ita.jpg') }}" alt="Neon flex"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/neon flex/ita-2.jpg') }}" alt="Neon flex"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/neon flex/ita-3.jpg') }}" alt="Neon flex"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/neon flex/ita-4.jpg') }}" alt="Neon flex"
                    style="width: 100%;height: 100%">
            </div>
        </div>

        {{-- Neon Flex --}}
        <div class="row g-2 mb-2">
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/neon flex/lain-3.jpg') }}" alt="Neon flex"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/neon flex/lain-4.jpg') }}" alt="Neon flex"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/neon flex/lain-1.jpg') }}" alt="Neon flex"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/neon flex/lain-2.jpg') }}" alt="Neon flex"
                    style="width: 100%;height: 100%">
            </div>
        </div>

        {{-- Pengelasan --}}
        <div class="row g-2 mb-2">
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/pengelasan/1.jpg') }}" alt="Pengelasan"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/pengelasan/2.jpg') }}" alt="Pengelasan"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/pengelasan/3.jpg') }}" alt="Pengelasan"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-3">
                <img src="{{ asset('assets/img/photo/workshop/pengelasan/4.jpg') }}" alt="Pengelasan"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-4">
                <img src="{{ asset('assets/img/photo/workshop/pengelasan/5.jpg') }}" alt="Pengelasan"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-4">
                <img src="{{ asset('assets/img/photo/workshop/pengelasan/6.jpg') }}" alt="Pengelasan"
                    style="width: 100%;height: 100%">
            </div>
            <div class="col-4">
                <img src="{{ asset('assets/img/photo/workshop/pengelasan/7.jpg') }}" alt="Pengelasan"
                    style="width: 100%;height: 100%">
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
