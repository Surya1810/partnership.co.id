@extends('layout.app')

@section('title')
    Home
@endsection

@push('css')
    <style>
        .business-card {
            border-radius: 15px;
            background: #fff;
            transition: all 0.3s ease-in-out;
        }

        .business-card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
        }

        .stat-card {
            background: #fff;
            transition: all 0.3s ease-in-out;
        }

        .stat-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }

        .counter {
            font-size: 2.5rem;
            letter-spacing: -1px;
        }
    </style>
@endpush

@section('content')
    <!-- Heroes -->
    <section class="heroes">
        <div class="container h-100">
            <div class="row align-items-center g-5 py-5 h-100">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-white lh-1 mb-3">Your Solution Partner</h1>
                    <p class="lead text-white">Tulis kisah sukses Anda bersama kami. Solusi terbaik akan kami ciptakan untuk
                        Anda!</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="{{ route('product') }}" class="btn btn-primary btn-lg px-4 me-md-2 rounded-4">Kenali
                            Lebih
                            Jauh <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="d-none d-md-block col-12 col-lg-6">
                    <img src="{{ asset('assets/img/logo/light/main.png') }}" class="d-block mx-lg-auto img-fluid"
                        alt="icon_P" width="100%" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- start client-->
    <section class="s-line-hr-top" style="background-color: #FFFFFF; height: 20svh">
        <div class="container-fluid h-100 d-none d-md-block">
            <div class="row align-items-center justify-content-center h-100 g-0">
                <div class="col-1">
                    <img src="{{ asset('assets/img/client/landing/01_POLRI.png') }}" alt="polri" width="65%">
                </div>
                <div class="col-1">
                    <img src="{{ asset('assets/img/client/landing/32_ALFAMART.png') }}" alt="alfamart" width="65%">
                </div>
                <div class="col-1">
                    <img src="{{ asset('assets/img/client/landing/05_DISHUB.png') }}" alt="dishub" width="65%">
                </div>
                <div class="col-1">
                    <img src="{{ asset('assets/img/client/landing/31_INDOSAT.png') }}" alt="indosat" width="65%">
                </div>
                <div class="col-1">
                    <img src="{{ asset('assets/img/client/landing/09_KEMENTRIAN_ESDM.png') }}" alt="esdm"
                        width="65%">
                </div>
                <div class="col-1">
                    <img src="{{ asset('assets/img/client/landing/20_KAI.png') }}" alt="kai" width="65%">
                </div>
                <div class="col-1">
                    <img src="{{ asset('assets/img/client/landing/19_PLN.png') }}" alt="pln" width="65%">
                </div>
                <div class="col-1">
                    <img src="{{ asset('assets/img/client/landing/24_BJB.png') }}" alt="bjb" width="65%">
                </div>
                <div class="col-1">
                    <img src="{{ asset('assets/img/client/landing/26_PERBAKIN.png') }}" alt="perbakin" width="65%">
                </div>


                <div class="col-1 align-items-center">
                    <a href="{{ route('client') }}" class="btn btn-sm btn-outline-primary rounded-4 w-100">Selengkapnya <i
                            class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- start keunggulan-->
    <section class="d-flex align-items-center justify-content-center bg-white" style="min-height: 70svh">
        <div class="container">
            <div class="row g-4">
                <div class="col-6 col-md-3">
                    <div class="card shadow-sm rounded-4 h-100 p-4 stat-card">
                        <div class="card-body">
                            <h1 class="fw-bold fs-2 text-primary mb-2"><span class="count" data-count="15">0</span>
                                Tahun
                            </h1>
                            <small>Tahun perjalanan sejak 2010</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card shadow-sm rounded-4 h-100 p-4 stat-card">
                        <div class="card-body">
                            <h1 class="fw-bold fs-2 text-primary mb-2"><span class="count" data-count="8">0</span>
                            </h1>
                            <small>Produk & layanan yang menjawab kebutuhan</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card shadow-sm rounded-4 h-100 p-4 stat-card">
                        <div class="card-body">
                            <h1 class="fw-bold fs-2 text-primary mb-2"><span class="count" data-count="50">0</span>+
                            </h1>
                            <small>Klien yang percaya & puas dengan kami</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card shadow-sm rounded-4 h-100 p-4 stat-card">
                        <div class="card-body">
                            <h1 class="fw-bold fs-2 text-primary mb-2"><span class="count" data-count="450">0</span>+
                            </h1>
                            <small>Project yang sukses kami kerjakan</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end CTA-->
    <section id="aspiration" class="py-lg-5 py-4" style="background-color: #0B0B45">
        <div class="container text-white">
            <div class="row py-3 py-sm-2">
                <h2 class="fs-2 fw-600 text-white">Komitmen Kami</h2>
                <h3 class="fw-light fs-3 mb-4">
                    “Kami hadir untuk memberikan <strong class="fw-bold">solusi yang tepat</strong>
                    dan <strong class="fw-bold">menyelesaikan setiap permasalahan</strong>
                    dengan layanan yang menyeluruh, inovatif, dan terpercaya.”
                </h3>
            </div>
        </div>
    </section>
    <!-- end CTA-->

    <!-- start product & layanan -->
    <section class="container_border_front" id="product">
        <div class="container h-100 p-5">
            <div class="row align-items-center h-100">
                <div class="col-12 text-center text-white">
                    <h1><strong>Produk & Layanan Kami</strong></h1>
                </div>
            </div>
        </div>
    </section>
    <section class="u-line-hr-top d-flex align-items-center" style="min-height: 70svh;background-color: #fff">
        <div class="container text-center">
            <div class="row g-4">
                @foreach ($products as $business)
                    <div class="col-12 col-md-4 col-lg-3">
                        <a href="{{ route('product.detail', $business->id) }}">
                            <div class="card business-card border-0 rounded-4">
                                <div class="card-body">
                                    <img src="{{ asset('assets/img/logo/dark/' . $business->logo) }}"
                                        class="w-100 my-4 px-3" alt="{{ $business->name }}">
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('product') }}" class="btn btn-outline-primary rounded-4 my-5">Pelajari Lebih <i
                    class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>

    <!-- start Video -->
    <section class="workshop p-5">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <h1 class="text-white fw-600 mb-5 text-center">Video</h1>
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-12 col-md-4 my-3">
                        <div class="ratio ratio-16x9 rounded shadow">
                            <iframe src="https://www.youtube.com/embed/eu3FYB5_Z44?si=Q7rHn_oJgIRgue-x?rel=0"
                                title="Video 1" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 my-3">
                        <div class="ratio ratio-16x9 rounded shadow">
                            <iframe src="https://www.youtube.com/embed/xN_vSjrfsnA?si=jar9gcLXCGlKTwaE?rel=0"
                                title="Video 2" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 my-3">
                        <div class="ratio ratio-16x9 rounded shadow">
                            <iframe src="https://www.youtube.com/embed/pb3sRN4COJw?si=BtdI9Qw5L3l8UIhH?rel=0"
                                title="Video 3" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- start CTA -->
    <section class="join">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="container-gap-lg card-address shadow" style="background-color: #fff">
                    <div class="row justify-content-center align-items-center">
                        <div class="header col-lg-6 col-md-6 col-sm-12">
                            <h2 class="text-navy fw-600 mb-3">
                                Temukan solusi Anda bersama Partnership </h2>
                            <p class="text-grey mb-3">
                                Partnership merupakan perusahaan penyedia produk dan jasa di Indonesia </p>
                            <a href="{{ route('contact') }}" class="btn btn-lg btn-primary rounded-4">Hubungi
                                kami</a>
                        </div>
                        <div class="d-none d-md-block col-12 col-lg-6">
                            <img src="{{ asset('assets/img/logo/icon_p_black.png') }}"
                                class="d-block mx-lg-auto img-fluid" alt="icon_P" width="50%" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const counters = document.querySelectorAll('.count');
            let started = false;

            const startCountUp = () => {
                counters.forEach(counter => {
                    const updateCount = () => {
                        const target = +counter.getAttribute("data-count");
                        const count = +counter.innerText;
                        const increment = target / 100;

                        if (count < target) {
                            counter.innerText = Math.ceil(count + increment);
                            setTimeout(updateCount, 20);
                        } else {
                            counter.innerText = target;
                        }
                    };
                    updateCount();
                });
            };

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !started) {
                        startCountUp();
                        started = true;
                    }
                });
            }, {
                threshold: 0.4
            });

            observer.observe(document.querySelector("#aspiration"));
        });
    </script>
@endpush
