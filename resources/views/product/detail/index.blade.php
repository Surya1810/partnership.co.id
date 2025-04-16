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
    </style>
@endpush

@section('content')
    @if ($products->id === 1)
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
            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
                <div class="col-md-5 p-lg-5 mx-auto my-5">
                    <p class="lead fw-normal">{{ $products->desc }}</p>
                </div>
            </div>

            <div class="container py-3 marketing">
                <!-- START THE FEATURETTES -->
                <div class="row featurette align-items-center">
                    <div class="col-md-7">
                        <h2>Keunggulan <b>{{ $products->name }}</b></h2>

                        <ul class="fs-5">
                            <li><b>Layanan Pengadaan Lengkap</b><br> Dari sparepart hingga ATK, kami menyediakan segala
                                kebutuhan bisnis Anda dengan proses yang mudah dan cepat.
                            </li>
                            <li><b>Efisiensi Biaya</b><br>Kami menawarkan solusi pengadaan yang hemat biaya tanpa
                                mengorbankan
                                kualitas produk.</li>
                            <li><b>Kemitraan Luas</b><br>Kami bekerja sama dengan pemasok terpercaya untuk memastikan
                                pasokan
                                barang berkualitas dengan harga yang kompetitif.
                            </li>
                            <li><b>Layanan Disesuaikan</b><br>Setiap bisnis memiliki kebutuhan yang berbeda, dan kami
                                menawarkan
                                solusi pengadaan yang dapat disesuaikan dengan skala dan kebutuhan spesifik Anda.</li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/photo/procurement/2.jpg') }}" alt="Partnerhsip"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette align-items-center">
                    <div class="col-md-7 order-md-2">
                        <h2>Layanan <b>{{ $products->name }}</b></h2>
                        <ul class="fs-5">

                            <li><b>Pengadaan Sparepart</b><br>Menyediakan sparepart industri, mesin, dan peralatan lainnya
                                untuk
                                memastikan operasional yang lancar.</li>
                            <li><b>Pengadaan ATK</b><br>Memenuhi kebutuhan alat tulis kantor dan perlengkapan kerja lainnya
                                dengan pilihan produk yang beragam</li>
                            <li><b>Pengadaan Umum</b><br> Mengelola pengadaan berbagai produk lainnya sesuai dengan
                                kebutuhan
                                unik bisnis Anda.</li>
                        </ul>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img src="{{ asset('assets/img/photo/eo/2.webp') }}" alt="Partnerhsip"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette align-items-center">
                    <div class="col-md-7">
                        {{-- <h2>And lastly, this one. <span class="text-muted">Checkmate.</span> --}}
                        </h2>
                        <p class="fs-5">Partnership Procurement Solution menyediakan layanan pengadaan lengkap untuk
                            bisnis,
                            termasuk sparepart dan ATK, dengan efisiensi biaya dan layanan yang disesuaikan. Kami memastikan
                            Anda mendapatkan produk berkualitas tepat waktu untuk mendukung kelancaran operasional bisnis.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/photo/procurement/1.jpg') }}" alt="Partnerhsip"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500">
                    </div>
                </div>


                <hr class="featurette-divider">
                <h3>Produk & Jasa Kami</h3>
                <div class="row g-2 d-flex justify-content-center text-center">
                    <div class="col-12 col-md-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <strong>
                                    Pengadaan ATK
                                </strong>
                                <p>
                                    Pengadaan Alat Tulis yang anda perlukan
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <strong>
                                    Pengadaan Sparepart
                                </strong>
                                <p>
                                    Pengadaan Sparepart yang anda perlukan
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <strong>
                                    Pengadaan Umum
                                </strong>
                                <p>
                                    Pengadaan untuk segala kebutuhan anda
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="featurette-divider">

                <h3 class="text-center fw-600">Galeri</h3>
                {{-- Pengadaan Sparepart --}}
                <div class="row g-3 pt-3 mb-5">
                    <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                        <h3 class="fs-4 text-navy fw-600 mb-3">
                            Pengadaan Sparepart PSDMBP
                        </h3>
                    </div>
                    <div class="offset-lg-1 col-sm-12 col-lg-7">
                        <div class="row g-2">
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/procurement/Pengadaan Sparepart/1.jpg') }}"
                                    alt="PSDMBP" style="width: 100%;height: 100%">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/procurement/Pengadaan Sparepart/2.jpg') }}"
                                    alt="PSDMBP" style="width: 100%;height: 100%">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/procurement/Pengadaan Sparepart/3.jpg') }}"
                                    alt="PSDMBP" style="width: 100%;height: 100%">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/procurement/Pengadaan Sparepart/4.jpg') }}"
                                    alt="PSDMBP" style="width: 100%;height: 100%">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/procurement/Pengadaan Sparepart/5.jpg') }}"
                                    alt="PSDMBP" style="width: 100%;height: 100%">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/procurement/Pengadaan Sparepart/6.jpg') }}"
                                    alt="PSDMBP" style="width: 100%;height: 100%">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/procurement/Pengadaan Sparepart/7.jpg') }}"
                                    alt="PSDMBP" style="width: 100%;height: 100%">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/procurement/Pengadaan Sparepart/8.jpg') }}"
                                    alt="PSDMBP" style="width: 100%;height: 100%">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pengadaan Medali --}}
                <div class="row g-3 pt-3 mb-5">
                    <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                        <h3 class="fs-4 text-navy fw-600 mb-3">
                            Pengadaan Medali SESPIM
                        </h3>
                    </div>
                    <div class="offset-lg-1 col-sm-12 col-lg-7">
                        <div class="row g-2">
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/procurement/Pengadaan Medali/1.jpg') }}"
                                    alt="SESPIM" style="width: 100%;height: 100%">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/procurement/Pengadaan Medali/2.jpg') }}"
                                    alt="SESPIM" style="width: 100%;height: 100%">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/procurement/Pengadaan Medali/3.jpg') }}"
                                    alt="SESPIM" style="width: 100%;height: 100%">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/procurement/Pengadaan Medali/4.jpg') }}"
                                    alt="SESPIM" style="width: 100%;height: 100%">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/img/photo/procurement/Pengadaan Medali/5.jpg') }}"
                                    alt="SESPIM" style="width: 100%;height: 100%">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/img/photo/procurement/Pengadaan Medali/6.jpg') }}"
                                    alt="SESPIM" style="width: 100%;height: 100%">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/img/photo/procurement/Pengadaan Medali/7.jpg') }}"
                                    alt="SESPIM" style="width: 100%;height: 100%">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/procurement/Pengadaan Medali/8.jpg') }}"
                                    alt="SESPIM" style="width: 100%;height: 100%">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/procurement/Pengadaan Medali/9.jpg') }}"
                                    alt="SESPIM" style="width: 100%;height: 100%">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/procurement/Pengadaan Medali/10.jpg') }}"
                                    alt="SESPIM" style="width: 100%;height: 100%">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/procurement/Pengadaan Medali/11.jpg') }}"
                                    alt="SESPIM" style="width: 100%;height: 100%">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    @elseif ($products->id === 3)
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



        <!-- Judul -->
        <section class="s-line-hr-top" style="min-height: 100svh;background-color: #fff">
            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
                <div class="col-md-5 p-lg-5 mx-auto my-5">
                    <p class="lead fw-normal">{{ $products->desc }}</p>
                </div>
            </div>

            <div class="container py-3 marketing">
                <!-- START THE FEATURETTES -->
                <div class="row featurette align-items-center">
                    <div class="col-md-7">
                        <h2>Keunggulan <b>{{ $products->name }}</b></h2>

                        <ul class="fs-5">
                            <li><b>Layanan Terintegrasi</b><br>Menawarkan solusi lengkap dari perencanaan awal hingga
                                pelaksanaan akhir, memastikan setiap aspek proyek Anda dikelola dengan baik.</li>
                            <li><b>Keahlian Profesional</b><br>Tim kami terdiri dari ahli di bidang arsitektur, teknik, dan
                                konstruksi, memberikan hasil yang memenuhi standar kualitas tertinggi.</li>
                            <li><b>Pengawasan yang Ketat</b><br>Kami mengawasi setiap tahap proyek dengan cermat, memastikan
                                bahwa semua pekerjaan dilakukan sesuai dengan spesifikasi dan regulasi.
                            </li>
                            <li><b>Kustomisasi Proyek</b><br>Layanan kami disesuaikan dengan kebutuhan spesifik proyek Anda,
                                dari desain interior hingga pengaspalan, memastikan hasil yang sesuai dengan visi Anda.</li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/photo/contractor/1.webp') }}" alt="Partnerhsip"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette align-items-center">
                    <div class="col-md-7 order-md-2">
                        <h2>Layanan <b>{{ $products->name }}</b></h2>
                        <ul class="fs-5">
                            <li><b>Perencanaan & Pengawasan</b><br>Pengelolaan proyek dari tahap perencanaan hingga
                                pengawasan
                                pelaksanaan untuk memastikan hasil yang optimal.</li>
                            <li><b>Arsitektur & Interior</b><br>Desain arsitektur dan interior yang inovatif dan sesuai
                                dengan
                                kebutuhan dan preferensi klien.</li>
                            <li><b>Pengukuran & Pemetaan</b><br>Layanan pengukuran dan pemetaan akurat untuk mendukung
                                perencanaan dan konstruksi.</li>
                            <li><b>Pengaspalan & Pembetonan</b><br>Pengerjaan pengaspalan jalan dan pembetonan untuk
                                infrastruktur yang kuat dan tahan lama.</li>
                        </ul>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img src="{{ asset('assets/img/photo/contractor/2.webp') }}" alt="Partnerhsip"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette align-items-center">
                    <div class="col-md-7">
                        <p class="fs-5">Partnership Contractor menyediakan solusi konstruksi menyeluruh, dari perencanaan
                            dan
                            pengawasan
                            hingga arsitektur, interior, pengukuran, dan pengaspalan. Dengan tim profesional dan layanan
                            yang
                            disesuaikan, kami memastikan setiap proyek Anda selesai dengan kualitas tinggi dan sesuai dengan
                            kebutuhan Anda.</p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/photo/contractor/3.jpg') }}" alt="Partnerhsip"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500">
                    </div>
                </div>


                <hr class="featurette-divider">
                <h3>Produk Kami</h3>
                <div class="row g-2 d-flex justify-content-center text-center">
                    <div class="col-12 col-md-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <strong>
                                    Perawatan & Permeliharaan Gedung
                                </strong>
                                <p>
                                    Jasa perawatan dan pemeliharaan gedung anda
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('product.detail', 8) }}" class="btn btn-outline-dark">Pelajari</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <strong>
                                    Pengaspalan
                                </strong>
                                <p>
                                    Jasa pengaspalan yang berkualitas
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <strong>
                                    Elektrikal
                                </strong>
                                <p>
                                    Memperbaiki dan membuat jalur listrik
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <strong>
                                    Pembangunan
                                </strong>
                                <p>
                                    Desain, Perencanaan hingga eksekusi pembangunan
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="featurette-divider">
                <h3 class="text-center fw-600">Galeri</h3>

                {{-- Perawatan Gedung --}}
                <div class="row g-3 pt-3 mb-5">
                    <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                        <h3 class="fs-4 text-navy fw-600 mb-3">
                            Perawatan Gedung PSDMBP
                        </h3>
                    </div>
                    <div class="offset-lg-1 col-sm-12 col-lg-7">
                        <div class="row g-2">
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/contractor/Perawatan Gedung/1.jpg') }}"
                                    alt="Gedung" style="width: 100%;height: 100%">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/contractor/Perawatan Gedung/2.jpg') }}"
                                    alt="Gedung" style="width: 100%;height: 100%">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/contractor/Perawatan Gedung/3.jpg') }}"
                                    alt="Gedung" style="width: 100%;height: 100%">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/contractor/Perawatan Gedung/4.jpg') }}"
                                    alt="Gedung" style="width: 100%;height: 100%">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/img/photo/contractor/Perawatan Gedung/5.webp') }}"
                                    alt="Gedung" style="width: 100%;height: 100%">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/img/photo/contractor/Perawatan Gedung/6.webp') }}"
                                    alt="Gedung" style="width: 100%;height: 100%">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/img/photo/contractor/Perawatan Gedung/7.webp') }}"
                                    alt="Gedung" style="width: 100%;height: 100%">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Elektrikal --}}
                <div class="row g-3 pt-3 mb-5">
                    <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                        <h3 class="fs-4 text-navy fw-600 mb-3">
                            Elektrikal BJB
                        </h3>
                    </div>
                    <div class="offset-lg-1 col-sm-12 col-lg-7">
                        <div class="row g-2">
                            <div class="col-4">
                                <img src="{{ asset('assets/img/photo/contractor/Elektrikal/2.jpg') }}" alt="BJB"
                                    style="width: 100%;height: 100%">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/img/photo/contractor/Elektrikal/3.jpg') }}" alt="BJB"
                                    style="width: 100%;height: 100%">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/img/photo/contractor/Elektrikal/4.jpg') }}" alt="BJB"
                                    style="width: 100%;height: 100%">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/img/photo/contractor/Elektrikal/1.jpg') }}" alt="BJB"
                                    style="width: 100%;height: 100%">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- BJB --}}
                <div class="row g-3 pt-3 mb-5">
                    <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                        <h3 class="fs-4 text-navy fw-600 mb-3">
                            Pembangunan Gudang Arsip BJB
                        </h3>
                    </div>
                    <div class="offset-lg-1 col-sm-12 col-lg-7">
                        <div class="row g-2">
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/contractor/Arsip BJB/1.jpg') }}" alt="BJB"
                                    style="width: 100%;height: 100%">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/contractor/Arsip BJB/2.jpg') }}" alt="BJB"
                                    style="width: 100%;height: 100%">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/contractor/Arsip BJB/3.jpg') }}" alt="BJB"
                                    style="width: 100%;height: 100%">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/contractor/Arsip BJB/4.jpg') }}" alt="BJB"
                                    style="width: 100%;height: 100%">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/img/photo/contractor/Arsip BJB/5.jpg') }}" alt="BJB"
                                    style="width: 100%;height: 100%">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/img/photo/contractor/Arsip BJB/6.jpg') }}" alt="BJB"
                                    style="width: 100%;height: 100%">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/img/photo/contractor/Arsip BJB/7.jpg') }}" alt="BJB"
                                    style="width: 100%;height: 100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @elseif ($products->id === 4)
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

        <!-- Judul -->
        <section class="s-line-hr-top" style="min-height: 100svh;background-color: #fff">
            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
                <div class="col-md-5 p-lg-5 mx-auto my-5">
                    <p class="lead fw-normal">{{ $products->desc }}</p>
                </div>
            </div>

            <div class="container py-3 marketing">
                <!-- START THE FEATURETTES -->
                <div class="row featurette align-items-center">
                    <div class="col-md-7">
                        <h2>Keunggulan <b>{{ $products->name }}</b></h2>

                        <ul class="fs-5">
                            <li><b>Pengalaman dan Keahlian</b><br>Tim pengacara berpengalaman dengan keahlian luas dalam
                                berbagai bidang hukum, memberikan solusi yang tepat dan efektif.</li>
                            <li><b>Pendekatan Personal</b><br>Kami menawarkan layanan yang disesuaikan dengan kebutuhan unik
                                setiap klien, menjadi mitra yang memahami dan melindungi kepentingan Anda.</li>
                            <li><b>Kehadiran dalam Setiap Langkah</b><br>Kami mendampingi klien dari awal hingga akhir
                                proses
                                hukum, memastikan dukungan yang konsisten dan keputusan berdasarkan pertimbangan yang
                                matang.
                            </li>
                            <li><b>Komunikasi Terbuka</b><br>Transparansi dan komunikasi yang jelas adalah prioritas kami,
                                dengan laporan rutin dan jawaban tepat waktu untuk setiap pertanyaan Anda.</li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/photo/law/SMT.png') }}" alt="Partnerhsip"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette align-items-center">
                    <div class="col-md-7 order-md-2">
                        <h2>Layanan <b>{{ $products->name }}</b></h2>
                        <ul class="fs-5">
                            <li><b>Konsultasi Hukum</b><br>Memberikan nasihat hukum yang jelas dan praktis untuk berbagai
                                masalah hukum, termasuk bisnis, perdata, dan pidana.</li>
                            <li><b>Pendampingan Hukum</b><br>Membantu dalam negosiasi, penyusunan kontrak, dan proses hukum
                                lainnya untuk memastikan hak dan kepentingan Anda terlindungi dengan baik.</li>
                            <li><b>Representasi di Pengadilan</b><br>Mewakili klien dalam berbagai kasus hukum dengan
                                strategi
                                yang terencana dan didukung oleh bukti serta argumen hukum yang kuat.</li>
                        </ul>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img src="{{ asset('assets/img/photo/law/2.webp') }}" alt="Partnerhsip"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette align-items-center">
                    <div class="col-md-7">
                        {{-- <h2>And lastly, this one. <span class="text-muted">Checkmate.</span> --}}
                        </h2>
                        <p class="fs-5">Partnership Law Consultant berkomitmen untuk menjadi mitra hukum yang dapat
                            diandalkan dalam jangka panjang. Kami tidak hanya fokus pada penyelesaian kasus, tetapi juga
                            pada
                            pencegahan masalah hukum di masa depan, membantu Anda membuat keputusan yang bijaksana dan
                            proaktif
                            dalam segala aspek hukum. Dengan kami di sisi Anda, Anda dapat merasa tenang dan yakin bahwa
                            urusan
                            hukum Anda berada di tangan yang tepat. <br><br>

                            Kami bangga telah membantu banyak klien mencapai hasil yang positif dan akan terus berusaha
                            memberikan layanan hukum yang terbaik. Partnership Law Consultant adalah pilihan tepat bagi
                            siapa
                            saja yang mencari layanan hukum yang profesional, terpercaya, dan berorientasi pada hasil.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/photo/law/1.webp') }}" alt="Partnerhsip"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500">
                    </div>
                </div>
            </div>
        </section>
    @elseif ($products->id === 5)
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

        <!-- Judul -->
        <section class="s-line-hr-top" style="min-height: 100svh;background-color: #fff">
            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
                <div class="col-md-5 p-lg-5 mx-auto my-5">
                    <p class="lead fw-normal">{{ $products->desc }}</p>
                </div>
            </div>

            <div class="container py-3 marketing">
                <!-- START THE FEATURETTES -->
                <div class="row featurette align-items-center">
                    <div class="col-md-7">
                        <h2>Keunggulan <b>{{ $products->name }}</b></h2>

                        <ul class="fs-5">
                            <li><b>Inovasi Terkini</b><br>Kami selalu mengadopsi teknologi terbaru untuk memastikan bisnis
                                Anda
                                selalu berada di garis depan dalam efisiensi operasional dan keamanan.</li>
                            <li><b>Solusi Khusus</b><br>Kami menawarkan layanan yang disesuaikan dengan kebutuhan unik
                                setiap
                                bisnis, dari implementasi RFID hingga pengembangan perangkat lunak yang dirancang khusus.
                            </li>
                            <li><b>Integrasi Lancar</b><br>Teknologi kami dapat diintegrasikan dengan sistem yang ada,
                                memastikan transisi yang mulus tanpa mengganggu operasional harian Anda.</li>
                            <li><b>Dukungan Profesional</b>Tim ahli kami siap memberikan konsultasi dan dukungan penuh,
                                mulai
                                dari perencanaan hingga implementasi, memastikan solusi teknologi kami memberikan hasil
                                maksimal.</li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/photo/tech/1.webp') }}" alt="Partnerhsip"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette align-items-center">
                    <div class="col-md-7 order-md-2">
                        <h2>Layanan <b>{{ $products->name }}</b></h2>
                        <ul class="fs-5">
                            <li><b>RFID & IoT Solutions</b><br>Solusi pencahayaan kreatif yang dapat disesuaikan untuk
                                berbagai
                                kebutuhan signage atau dekorasi.</li>
                            <li><b>Custom Software Development</b><br>Pengembangan perangkat lunak yang disesuaikan untuk
                                memenuhi kebutuhan spesifik bisnis Anda.</li>
                            <li><b>IT Consulting</b><br>Memberikan panduan strategis untuk membantu bisnis memilih dan
                                mengimplementasikan teknologi terbaik untuk pertumbuhan dan efisiensi.</li>
                        </ul>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img src="{{ asset('assets/img/photo/tech/2.webp') }}" alt="Partnerhsip"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette align-items-center">
                    <div class="col-md-7">
                        {{-- <h2>And lastly, this one. <span class="text-muted">Checkmate.</span> --}}
                        </h2>
                        <p class="fs-5">Partnership Technology menyediakan solusi teknologi canggih yang dirancang untuk
                            mengoptimalkan operasi bisnis Anda. Dari RFID hingga perangkat lunak khusus, kami menawarkan
                            inovasi
                            yang disesuaikan dengan kebutuhan unik Anda, didukung oleh tim ahli untuk memastikan integrasi
                            yang
                            mulus dan hasil yang maksimal.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/photo/tech/3.webp') }}" alt="Partnerhsip"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500">
                    </div>
                </div>

                <hr class="featurette-divider">
                <h3>Produk & Jasa Kami</h3>
                <div class="row g-2 d-flex justify-content-center text-center">
                    <div class="col-12 col-md-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <strong>
                                    Partner Secure Tag Asset Management
                                </strong>
                                <p>
                                    Teknologi RFID untuk pendataan aset
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('product.securetag') }}" class="btn btn-outline-dark">Pelajari</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <strong>
                                    Partner Secure Tag Document Management
                                </strong>
                                <p>
                                    Teknologi RFID untuk pendataan dokumen
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('product.securetag') }}" class="btn btn-outline-dark">Pelajari</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <strong>
                                    K9 Vision
                                </strong>
                                <p>
                                    Teknologi alat pembantu K9
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('product.k9-vision') }}" class="btn btn-outline-dark">Pelajari</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <strong>
                                    Gun Detector
                                </strong>
                                <p>
                                    Teknologi pendeteksi senjata api
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('product.k9-vision') }}" class="btn btn-outline-dark">Pelajari</a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="featurette-divider">
                <h3 class="text-center fw-600">Galeri</h3>

                {{-- Secure Tag --}}
                <div class="row g-3 pt-3 mb-5">
                    <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                        <h3 class="fs-4 text-navy fw-600 mb-3">
                            Secure Tag RFID
                        </h3>
                    </div>
                    <div class="offset-lg-1 col-sm-12 col-lg-7">
                        <div class="row g-2">
                            <div class="col-4">
                                <img src="{{ asset('assets/img/photo/tech/RFID/1.webp') }}" alt="RFID"
                                    style="width: 100%;height: 100%">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/img/photo/tech/RFID/2.webp') }}" alt="RFID"
                                    style="width: 100%;height: 100%">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/img/photo/tech/RFID/3.webp') }}" alt="RFID"
                                    style="width: 100%;height: 100%">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- K9 Vision --}}
                <div class="row g-3 pt-3 mb-5">
                    <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                        <h3 class="fs-4 text-navy fw-600 mb-3">
                            K9 Vision
                        </h3>
                    </div>
                    <div class="offset-lg-1 col-sm-12 col-lg-7">
                        <div class="row g-2">
                            <div class="col-4">
                                <img src="{{ asset('assets/img/photo/tech/K9/9.jpg') }}" alt="K9"
                                    style="width: 100%;height: 100%">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/img/photo/tech/K9/10.jpg') }}" alt="K9"
                                    style="width: 100%;height: 100%">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/img/photo/tech/K9/11.jpg') }}" alt="K9"
                                    style="width: 100%;height: 100%">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/tech/K9/5.jpg') }}" alt="K9"
                                    style="width: 100%;height: 100%">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/tech/K9/6.jpg') }}" alt="K9"
                                    style="width: 100%;height: 100%">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/tech/K9/7.jpg') }}" alt="K9"
                                    style="width: 100%;height: 100%">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('assets/img/photo/tech/K9/8.jpg') }}" alt="K9"
                                    style="width: 100%;height: 100%">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/img/photo/tech/K9/1.jpg') }}" alt="K9"
                                    style="width: 100%;height: 100%">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/img/photo/tech/K9/2.jpg') }}" alt="K9"
                                    style="width: 100%;height: 100%">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/img/photo/tech/K9/4.jpg') }}" alt="K9"
                                    style="width: 100%;height: 100%">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Gun Detector --}}
                <div class="row g-3 pt-3 mb-5">
                    <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                        <h3 class="fs-4 text-navy fw-600 mb-3">
                            Gun Detector
                        </h3>
                    </div>
                    <div class="offset-lg-1 col-sm-12 col-lg-7">
                        <div class="row g-2">
                            <div class="col-4">
                                <img src="{{ asset('assets/img/photo/tech/Gun Detector/1.jpg') }}" alt="Gun Detector"
                                    style="width: 100%;height: 100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @elseif ($products->id === 6)
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

        <!-- Judul -->
        <section class="s-line-hr-top" style="min-height: 100svh;background-color: #fff">
            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
                <div class="col-md-5 p-lg-5 mx-auto my-5">
                    <p class="lead fw-normal">{{ $products->desc }}</p>
                </div>
            </div>

            <div class="container py-3 marketing">
                <!-- START THE FEATURETTES -->
                <div class="row featurette align-items-center">
                    <div class="col-md-7">
                        <h2>Keunggulan <b>{{ $products->name }}</b></h2>

                        <ul class="fs-5">
                            <li><b>Desain dan Pengalaman Pengguna yang Optimal</b><br>Kami menciptakan website yang tidak
                                hanya
                                menarik secara visual, tetapi juga mudah digunakan, memastikan pengalaman pengguna yang
                                optimal.
                            </li>
                            <li><b>Sistem Informasi Terintegrasi</b><br>Layanan kami meliputi pengembangan sistem informasi
                                yang
                                terintegrasi dengan operasi bisnis Anda, memungkinkan pengelolaan data yang efisien dan
                                mendukung pengambilan keputusan yang lebih baik.</li>
                            <li><b>Solusi yang Disesuaikan</b><br>Setiap produk dan layanan yang kami tawarkan dirancang
                                khusus
                                untuk memenuhi kebutuhan spesifik klien, memastikan hasil yang sesuai dengan tujuan bisnis
                                Anda.
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/photo/it/1.webp') }}" alt="Partnerhsip"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette align-items-center">
                    <div class="col-md-7 order-md-2">
                        <h2>Layanan <b>{{ $products->name }}</b></h2>
                        <ul class="fs-5">
                            <li><b>Pengembangan Website</b><br>Menciptakan situs web yang fungsional, responsif, dan menarik
                                untuk memperkuat kehadiran online Anda.</li>
                            <li><b>Sistem Informasi</b><br>Pengembangan dan integrasi sistem informasi untuk mendukung
                                operasi
                                bisnis dan pengelolaan data yang efisien.</li>
                            <li><b>Manajemen Konten</b><br>Layanan pengelolaan konten yang memastikan website Anda selalu
                                up-to-date dan relevan.</li>
                            <li><b>Optimasi SEO</b><br>Meningkatkan visibilitas online Anda dengan teknik optimasi mesin
                                pencari
                                yang efektif.</li>
                        </ul>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img src="{{ asset('assets/img/photo/it/1.webp') }}" alt="Partnerhsip"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette align-items-center">
                    <div class="col-md-7">
                        {{-- <h2>And lastly, this one. <span class="text-muted">Checkmate.</span> --}}
                        </h2>
                        <p class="fs-5">Dengan Partnership Information System & Website, Anda mendapatkan lebih dari
                            sekadar
                            solusi teknologi namun Anda mendapatkan mitra yang berkomitmen untuk membantu bisnis Anda tumbuh
                            dan
                            berkembang di dunia digital.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/photo/it/1.webp') }}" alt="Partnerhsip"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500">
                    </div>
                </div>

                <hr class="featurette-divider">
                <h3>Produk & Jasa Kami</h3>
                <div class="row g-2 d-flex justify-content-center text-center">
                    <div class="col-12 col-md-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <strong>
                                    Pembuatan Website
                                </strong>
                                <p>
                                    Jasa pembuatan website yang profesional dan berkualitas
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <strong>
                                    Perawatan Website
                                </strong>
                                <p>
                                    Jasa perawatan website yang profesional dan berkualitas

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <strong>
                                    SEO Spesialis
                                </strong>
                                <p>
                                    Mempersiapan SEO yang profesional dan berkualitas

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @elseif ($products->id === 7)
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

        <!-- Judul -->
        <section class="s-line-hr-top" style="min-height: 100svh;background-color: #fff">
            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
                <div class="col-md-5 p-lg-5 mx-auto my-5">
                    <p class="lead fw-normal">{{ $products->desc }}</p>
                </div>
            </div>

            <div class="container py-3 marketing">
                <!-- START THE FEATURETTES -->
                <div class="row featurette align-items-center">
                    <div class="col-md-7">
                        <h2>Keunggulan <b>{{ $products->name }}</b></h2>

                        <ul class="fs-5">
                            <li><b>Layanan Terintegrasi</b><br>Menyediakan solusi menyeluruh untuk semua kebutuhan acara
                                Anda,
                                dari perencanaan hingga eksekusi, memastikan tidak ada detail yang terlewat.</li>
                            <li><b>Pengalaman Profesional</b><br>Tim kami terdiri dari ahli yang berpengalaman dalam
                                berbagai
                                jenis acara, menjamin hasil yang profesional dan sesuai dengan ekspektasi Anda.</li>
                            <li><b>Kustomisasi</b><br>Kami menawarkan layanan yang disesuaikan dengan kebutuhan spesifik
                                acara
                                Anda, mulai dari konsep hingga pelaksanaan, untuk menciptakan pengalaman yang unik dan
                                personal.
                            </li>
                            <li><b>Koordinasi Lancar</b><br>Mengelola berbagai aspek acara dengan efisien, termasuk
                                ticketing
                                dan catering, untuk memastikan setiap elemen bekerja harmonis.</li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/photo/eo/1.webp') }}" alt="Partnerhsip"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette align-items-center">
                    <div class="col-md-7 order-md-2">
                        <h2>Layanan <b>{{ $products->name }}</b></h2>
                        <ul class="fs-5">
                            <li><b>Wedding Organizer</b><br>Perencanaan dan pelaksanaan pernikahan yang sempurna, dari
                                dekorasi
                                hingga koordinasi hari H.</li>
                            <li><b>Fotografi & Videografi</b><br>Menangkap momen berharga dengan hasil foto dan video
                                berkualitas tinggi.</li>
                            <li><b>Gathering & Celebration</b><br>Menyusun acara berkumpul atau perayaan dengan tema yang
                                menarik dan eksekusi yang mulus.</li>
                            <li><b>Ticketing & Catering</b><br>Mengelola tiket dan menyediakan layanan catering yang lezat
                                untuk
                                berbagai jenis acara.</li>
                        </ul>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img src="{{ asset('assets/img/photo/eo/2.webp') }}" alt="Partnerhsip"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette align-items-center">
                    <div class="col-md-7">
                        {{-- <h2>And lastly, this one. <span class="text-muted">Checkmate.</span> --}}
                        </h2>
                        <p class="fs-5">Partnership Event Organizer & MICE menyediakan layanan lengkap untuk merancang
                            dan
                            mengelola acara yang sukses, termasuk wedding organizer, fotografi, videografi, dan lebih banyak
                            lagi. Dengan tim profesional dan layanan yang disesuaikan, kami menjamin setiap acara Anda
                            berjalan
                            dengan lancar dan meninggalkan kesan yang tak terlupakan.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/photo/eo/3.webp') }}" alt="Partnerhsip"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500">
                    </div>
                </div>

                <hr class="featurette-divider">
                <h3>Produk & Jasa Kami</h3>
                <div class="row g-2 d-flex justify-content-center text-center">
                    <div class="col-12 col-md-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <strong>
                                    Wedding Organizer
                                </strong>
                                <p>
                                    Mengelola acara pernikahan dengan profesional

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <strong>
                                    Event Organizer
                                </strong>
                                <p>
                                    Mengelola acara dengan profesional dan efektif

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <strong>
                                    Katering
                                </strong>
                                <p>
                                    Katering untuk acara Anda dengan menu yang lezat

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @elseif ($products->id === 8)
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

        <!-- Judul -->
        <section class="s-line-hr-top" style="min-height: 100svh;background-color: #fff">
            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
                <div class="col-md-5 p-lg-5 mx-auto my-5">
                    <p class="lead fw-normal">Partnership Building Maintenance & Cleaning menawarkan layanan pembersihan
                        dan
                        pemeliharaan gedung yang menyeluruh, dari pembersihan rutin hingga perawatan preventif. Dengan tim
                        profesional dan solusi yang disesuaikan, kami memastikan gedung Anda selalu bersih, terawat, dan
                        dalam
                        kondisi optimal.</p>
                </div>
            </div>

            <div class="container py-3 marketing">
                <!-- START THE FEATURETTES -->
                <div class="row featurette align-items-center">
                    <div class="col-md-7">
                        <h2>Keunggulan <b>Partnership Building Maintanance & Cleaning</b></h2>

                        <ul class="fs-5">
                            <li><b>Layanan Komprehensif</b><br>Kami menyediakan layanan pembersihan dan pemeliharaan yang
                                lengkap, dari pembersihan harian hingga perawatan rutin, memastikan gedung Anda selalu dalam
                                kondisi terbaik.</li>
                            <li><b>Tim Profesional</b><br>Dikelola oleh tenaga ahli yang berpengalaman, kami menggunakan
                                teknik
                                dan peralatan terbaru untuk hasil yang efektif dan efisien.</li>
                            <li><b>Kustomisasi Layanan</b><br>Menawarkan solusi yang disesuaikan dengan kebutuhan spesifik
                                gedung Anda, termasuk frekuensi layanan dan jenis perawatan yang dibutuhkan.
                            </li>
                            <li><b>Kualitas dan Keamanan</b><br>Kami mengutamakan penggunaan produk dan prosedur yang aman
                                dan
                                ramah lingkungan, menjaga kebersihan dan keamanan di setiap aspek layanan kami.</li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/photo/building/1.webp') }}" alt="Partnerhsip"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette align-items-center">
                    <div class="col-md-7 order-md-2">
                        <h2>Layanan <b>Partnership Building Maintanance & Cleaning</b></h2>
                        <ul class="fs-5">
                            <li><b>Pembersihan Rutin</b><br>Pembersihan harian atau mingguan untuk menjaga kebersihan dan
                                kerapihan gedung.</li>
                            <li><b>Pemeliharaan Preventif</b><br>Perawatan berkala untuk mencegah kerusakan dan memastikan
                                fungsi optimal sistem dan fasilitas gedung.</li>
                            <li><b>Gathering & Celebration</b><br>Layanan pembersihan mendalam seperti pembersihan karpet,
                                jendela, dan area khusus.</li>
                            <li><b>Ticketing & Catering</b><br>Pemeliharaan area luar gedung, termasuk taman dan fasad.</li>
                        </ul>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img src="{{ asset('assets/img/photo/building/3.jpg') }}" alt="Partnerhsip"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette align-items-center">
                    <div class="col-md-7">
                        {{-- <h2>And lastly, this one. <span class="text-muted">Checkmate.</span> --}}
                        </h2>
                        <p class="fs-5">Partnership Building Maintenance & Cleaning menyediakan layanan pembersihan dan
                            pemeliharaan gedung yang menyeluruh, memastikan lingkungan Anda bersih, terawat, dan aman.
                            Dengan
                            tim profesional dan solusi yang disesuaikan, kami menjaga kondisi optimal gedung Anda dengan
                            kualitas dan efisiensi tinggi.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/photo/building/3.webp') }}" alt="Partnerhsip"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500">
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection

@push('scripts')
@endpush
