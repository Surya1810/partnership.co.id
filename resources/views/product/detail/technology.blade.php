@extends('layout.app')

@section('title')
    {{ $products->name }}
@endsection

@push('css')
    <style>
        .container_border a {
            text-decoration: none;
            background-color: rgba(0, 0, 0, 0.4);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.3s;
        }

        .container_border a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .product-card {
            border-radius: 15px;
            background: #fff;
            transition: all 0.3s ease-in-out;
        }

        .product-card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
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

    <!-- Content -->
    <section class="s-line-hr-top" style="min-height: 100svh;background-color: #fff">
        <div class="container py-5 marketing">
            <!-- Header -->
            <div class="text-center mb-5">
                <p class="lead text-muted">
                    {{ $products->desc }}
                </p>
            </div>

            <h3 class="fw-semibold text-navy mb-4">Produk</h3>

            <!-- Produk Section -->
            <div class="row g-4">
                <!-- AMS -->
                <div class="col-md-6 col-lg-4">
                    <div class="card product-card h-100 border-0">
                        <a href="#" class="text-decoration-none text-black" data-bs-toggle="modal"
                            data-bs-target="#brosurAMS">
                            <img src="{{ asset('assets/img/brosur/Brosur AMS 1.png') }}"
                                class="card-img-top img-fluid w-100 object-fit-cover" alt="AMS" loading="lazy">
                            <div class="card-body">
                                <h5 class="card-title">AMS | Asset Management System</h5>
                                <p class="card-text">
                                    Sistem untuk manajemen aset berbasis RFID yang memudahkan pelacakan, inventarisasi,
                                    audit aset perusahaan secara real-time hingga laporan yang mudah diolah.
                                </p>
                                <strong>Pelajari Lebih Lanjut</strong>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- DMS -->
                <div class="col-md-6 col-lg-4">
                    <div class="card product-card h-100 border-0">
                        <a href="#" class="text-decoration-none text-black" data-bs-toggle="modal"
                            data-bs-target="#brosurDMS">
                            <img src="{{ asset('assets/img/brosur/Brosur DMS 1.png') }}"
                                class="card-img-top img-fluid w-100 object-fit-cover" alt="DMS" loading="lazy">
                            <div class="card-body">
                                <h5 class="card-title">DMS | Document Management System</h5>
                                <p class="card-text">
                                    Solusi digital berbasis RFID untuk pengelolaan dokumen fisik, memudahkan penyimpanan,
                                    pencarian, pengendalian akses dokumen hingga laporan yang mudah diolah.
                                </p>
                                <strong>Pelajari Lebih Lanjut</strong>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- HUMS -->
                <div class="col-md-6 col-lg-4">
                    <div class="card product-card h-100 border-0">
                        <a href="#" class="text-decoration-none text-black" data-bs-toggle="modal"
                            data-bs-target="#brosurHUMS">
                            <img src="{{ asset('assets/img/brosur/Brosur HUMS 1.png') }}"
                                class="card-img-top img-fluid w-100 object-fit-cover" alt="HUMS" loading="lazy">
                            <div class="card-body">
                                <h5 class="card-title">HUMS | Hajj Umrah Management System</h5>
                                <p class="card-text">
                                    Sistem berbasis RFID yang mendukung pengelolaan jamaah haji & umrah,
                                    memastikan keamanan, monitoring pergerakan, serta kemudahan manajemen perjalanan.
                                </p>
                                <strong>Pelajari Lebih Lanjut</strong>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Gun Detector -->
                <div class="col-md-6 col-lg-4">
                    <div class="card product-card h-100 border-0">
                        <img src="{{ asset('assets/img/photo/tech/Gun Detector/1.jpg') }}"
                            class="card-img-top img-fluid w-100 object-fit-cover" alt="Gun Detector" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">Gun Detector</h5>
                            <p class="card-text">
                                Sistem deteksi senjata berbasis teknologi cerdas yang terintegrasi dengan RFID,
                                mampu melakukan identifikasi cepat dan akurat untuk meningkatkan keamanan
                                gedung, bandara, maupun area publik.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- TNKB Detector -->
                <div class="col-md-6 col-lg-4">
                    <div class="card product-card h-100 border-0">
                        <img src="{{ asset('assets/img/brosur/TNKB Detector.jpg') }}"
                            class="card-img-top img-fluid w-100 object-fit-cover" alt="TNKB Detector" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">TNKB Detector</h5>
                            <p class="card-text">
                                Sistem digital berbasis teknologi RLSA untuk mendeteksi dan membaca data pada Tanda Nomor
                                Kendaraan Bermotor (TNKB),
                                mendukung sistem tilang elektronik, manajemen lalu lintas, serta keamanan transportasi.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Registrasi & Identifikasi Senjata Api -->
                <div class="col-md-6 col-lg-4">
                    <div class="card product-card h-100 border-0">
                        <img src="{{ asset('assets/img/brosur/Registrasi Senjata Api.jpg') }}"
                            class="card-img-top img-fluid w-100 object-fit-cover" alt="Registrasi Senjata Api"
                            loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">Registrasi & Identifikasi Senjata Api</h5>
                            <p class="card-text">
                                Sistem digital untuk mendukung proses registrasi, pencatatan, dan identifikasi senjata api,
                                memastikan legalitas kepemilikan serta mempermudah pelacakan dalam rangka keamanan nasional.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- PIMS -->
                <div class="col-md-6 col-lg-4">
                    <div class="card product-card h-100 border-0">
                        <img src="{{ asset('assets/img/brosur/PIMS.jpg') }}"
                            class="card-img-top img-fluid w-100 object-fit-cover" alt="PIMS" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">PIMS | Perbakin Information Management System</h5>
                            <p class="card-text">
                                Platform manajemen informasi untuk PERBAKIN yang berfungsi mengelola data anggota,
                                data kepemilikan senjata, serta administrasi organisasi secara terpusat dan terintegrasi.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- RUFF -->
                <div class="col-md-6 col-lg-4">
                    <div class="card product-card h-100 border-0">
                        <img src="{{ asset('assets/img/brosur/RUFF.png') }}"
                            class="card-img-top img-fluid w-100 object-fit-cover" alt="RUFF" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">RUFF</h5>
                            <p class="card-text">
                                Teknologi wearable berbentuk kacamata khusus untuk anjing dan kuda,
                                dilengkapi dengan kamera dan sensor yang memungkinkan perekaman video,
                                komunikasi, serta mendukung tugas anjing pelacak di lapangan.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- <!-- TLC -->
                <div class="col-md-6 col-lg-4">
                    <div class="card product-card h-100 border-0">
                        <img src="{{ asset('assets/img/brosur/TLC.jpg') }}"
                            class="card-img-top img-fluid w-100 object-fit-cover" alt="Traffic Light Controller"
                            loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title">Traffic Light Controller</h5>
                            <p class="card-text">
                                Sistem pengendali lampu lalu lintas berbasis teknologi cerdas yang dapat diatur secara
                                otomatis maupun manual, mendukung manajemen arus kendaraan yang lebih efisien dan mengurangi
                                kemacetan.
                            </p>
                        </div>
                    </div>
                </div> --}}
            </div>

            <!-- Video -->
            <h3 class="fw-semibold text-navy mb-4">Video</h3>
            <div class="row d-flex justify-content-center text-center">
                <div class="col-12 col-md-4 my-3">
                    <div class="ratio ratio-16x9 rounded shadow">
                        <iframe src="https://www.youtube.com/embed/eu3FYB5_Z44?rel=0" title="Video 1" allowfullscreen
                            loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-12 col-md-4 my-3">
                    <div class="ratio ratio-16x9 rounded shadow">
                        <iframe src="https://www.youtube.com/embed/xN_vSjrfsnA?rel=0" title="Video 2" allowfullscreen
                            loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-12 col-md-4 my-3">
                    <div class="ratio ratio-16x9 rounded shadow">
                        <iframe src="https://www.youtube.com/embed/pb3sRN4COJw?rel=0" title="Video 3" allowfullscreen
                            loading="lazy"></iframe>
                    </div>
                </div>
            </div>

            <!-- Galeri -->
            <h3 class="fw-semibold text-navy my-5">Galeri</h3>

            <div class="row g-3 pt-3 mb-5">
                <div class="col-12">
                    <h5 class="fw-semibold text-navy text-center">ASDA 3 Jawa Barat</h5>
                </div>
                <div class="col-4">
                    <img src="{{ asset('assets/img/photo/tech/ASDA 3/1.jpg') }}"
                        class="img-fluid w-100 h-100 object-fit-cover" alt="ASDA" loading="lazy">
                </div>
                <div class="col-4">
                    <img src="{{ asset('assets/img/photo/tech/ASDA 3/2.jpg') }}"
                        class="img-fluid w-100 h-100 object-fit-cover" alt="ASDA" loading="lazy">
                </div>
                <div class="col-4">
                    <img src="{{ asset('assets/img/photo/tech/ASDA 3/3.jpg') }}"
                        class="img-fluid w-100 h-100 object-fit-cover" alt="ASDA" loading="lazy">
                </div>
            </div>

            <!-- Dispora Pangandaran -->
            <div class="row g-3 pt-3 mb-5">
                <div class="col-12">
                    <h5 class="fw-semibold text-navy text-center">Dispora Kabupaten Pangandaran</h5>
                </div>
                @for ($i = 1; $i <= 6; $i++)
                    <div class="col-4">
                        <img src="{{ asset("assets/img/photo/tech/Disdik Pangandaran/$i.jpg") }}"
                            class="img-fluid w-100 h-100 object-fit-cover" alt="Disdik" loading="lazy">
                    </div>
                @endfor
            </div>

            <!-- Bank Jawa Barat -->
            <div class="row g-3 pt-3 mb-5">
                <div class="col-12">
                    <h5 class="fw-semibold text-navy text-center">Bank Jawa Barat</h5>
                </div>
                <div class="col-6">
                    <img src="{{ asset('assets/img/photo/tech/BJB/1.jpg') }}"
                        class="img-fluid w-100 h-100 object-fit-cover" alt="BJB" loading="lazy">
                </div>
                <div class="col-6">
                    <img src="{{ asset('assets/img/photo/tech/BJB/3.jpg') }}"
                        class="img-fluid w-100 h-100 object-fit-cover" alt="BJB" loading="lazy">
                </div>
            </div>

            <!-- RUFF -->
            <div class="row g-3 pt-3 mb-5">
                <div class="col-12">
                    <h5 class="fw-semibold text-navy text-center">RUFF</h5>
                </div>
                @foreach ([9, 10, 11, 5, 6, 7, 4, 8, 2] as $img)
                    <div class="col-3 col-md-4">
                        <img src="{{ asset("assets/img/photo/tech/K9/$img.jpg") }}"
                            class="img-fluid w-100 h-100 object-fit-cover" alt="K9" loading="lazy">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="brosurAMS" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-body p-0">
                    <iframe src="{{ asset('assets/img/brosur/Brosur AMS.pdf') }}" width="100%" height="800px"
                        style="border:0;">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="brosurDMS" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-body p-0">
                    <iframe src="{{ asset('assets/img/brosur/Brosur DMS.pdf') }}" width="100%" height="800px"
                        style="border:0;">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="brosurHUMS" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-body p-0">
                    <iframe src="{{ asset('assets/img/brosur/Brosur HUMS.pdf') }}" width="100%" height="800px"
                        style="border:0;">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
