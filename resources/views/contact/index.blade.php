@extends('layout.app')

@section('title')
    Hubungi kami
@endsection

@push('css')
@endpush

@section('content')
    <!-- Judul -->
    <section class="container_border">
        <div class="container h-100 p-5">
            <div class="row align-items-center h-100">
                <div class="col-12 text-center text-white">
                    <h1><strong>Hubungi kami</strong></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Judul -->
    <section class="s-line-hr-top" style="min-height: 100svh;background-color: #fff">
        <section class="address py-5 mx-2 mx-lg-0">
            <div class="container container-gap-lg card-address" style="background-color: #EFEFEf">
                <div class="row justify-content-center">
                    <div class="header col-lg-6 col-md-6 col-sm-12">
                        <div class="text-header-address">
                            <h3>Kantor Pusat</h3>
                            <p>Jika Anda memiliki pertanyaan lainnya, jangan ragu untuk menghubungi kantor kami</p>
                        </div>
                        <div class="text-address">
                            <p>PT Partnership Procurement Solution<br>Jl. Golf Bar. III No.1, Sukamiskin, Kec. Arcamanik,
                                <br> Kota Bandung, Jawa Barat 40293
                            </p>
                        </div>
                        <div class="text-footer-address">
                            <div class="list-icon">
                                <h3>Hotline</h3>
                                <div class="text-icon"><i class="small-icon fa-solid fa-phone"></i>+6281318554360
                                </div>
                            </div>
                            <div class="list-icon">
                                <h3>Email</h3>
                                <div class="text-icon"><i class="small-icon fa-solid fa-envelope"></i>hi@partnership.co.id
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 gmap">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3372.848643337264!2d107.6749765!3d-6.917315899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68ddfe6850da71%3A0xda766011d36e7031!2sPartnership%20Head%20Office!5e1!3m2!1sid!2sid!4v1744785069292!5m2!1sid!2sid"
                            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            title="maps"></iframe>
                    </div>
                </div>
            </div>

            <div class="container container-gap-lg card-address mt-5" style="background-color: #EFEFEf">
                <div class="row justify-content-center">
                    <div class="header col-lg-6 col-md-6 col-sm-12">
                        <div class="text-header-address">
                            <h3>Workshop</h3>
                            <p>Jika Anda memiliki pertanyaan lainnya, jangan ragu untuk menghubungi workshop kami</p>
                        </div>
                        <div class="text-address">
                            <p>Partnership Workshop<br>Jl. Cingised No.2 Arcamanik, Kota Bandung,<br>Jawa Barat 40291</p>
                        </div>
                        <div class="text-footer-address">
                            <div class="list-icon">
                                <h3>Hotline</h3>
                                <div class="text-icon"><i class="small-icon fa-solid fa-phone"></i>+6285722280770
                                </div>
                            </div>
                            <div class="list-icon">
                                <h3>Email</h3>
                                <div class="text-icon"><i class="small-icon fa-solid fa-envelope"></i>hi@partnership.co.id
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 gmap">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d495.10196433844266!2d107.64939006629403!3d-6.912625189480249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7ecd3aeddb7%3A0xb1b80611740d391e!2sPartner%20Workshop!5e0!3m2!1sen!2sid!4v1719229867483!5m2!1sen!2sid"
                            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            title="maps"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="contacts">
            <div class="container container-gap-lg py-0">
                <div class="row">
                    <div class="col-sm-12 col-md-2 col-lg-3">
                        <h3 class="title-contact text-navy fw-600 mb-3">
                            Kontak </h3>
                    </div>
                    <div class="col-sm-12 col-md-10 col-lg-9">
                        <p class="text-grey mb-4">
                            Kami dengan senang hati akan menjawab pertanyaan Anda, silakan hubungi melalui salah satu kanal
                            di bawah ini. </p>
                        <div class="row">
                            <!-- partner care -->
                            <div class="col-sm-12 col-md-6 col-lg-6 pb-lg-0 pb-4">
                                <h4 class="sub-title fw-600 mb-12px">
                                    Partner Care </h4>
                                <!-- start hotline -->
                                <div class="list-icon">
                                    <h3>Hotline</h3>
                                    <div class="text-icon"><i class="small-icon fa-solid fa-phone"></i>+6282126000126
                                    </div>
                                </div>
                                <!-- end hotline -->
                                <!-- start whatsapp -->
                                <div class="list-icon">
                                    <h3>Whatsapp Workshop - Contractor - Building Maintenance - Law Consultant</h3>
                                    <div class="text-icon"><i class="small-icon fa-brands fa-whatsapp"></i>0821-2600-0126 -
                                        Firkie
                                    </div>
                                    <div class="text-icon" style="margin-left:34px ;">0857-2228-0770 - Uci</div>
                                    <div class="text-icon" style="margin-left:34px ;">0896-2630-9580 - Enza</div>
                                    <h3 class="mt-3">Whatsapp Technology - Information System</h3>
                                    <div class="text-icon"><i class="small-icon fa-brands fa-whatsapp"></i>0895-1277-6878 -
                                        Surya
                                    </div>
                                    <div class="text-icon" style="margin-left:34px ;">0877-2712-1888 - Rudy</div>
                                    <h3 class="mt-3">Whatsapp Procurement</h3>
                                    <div class="text-icon"><i class="small-icon fa-brands fa-whatsapp"></i>0821-1511-1704 -
                                        Duhan
                                    </div>
                                    <h3 class="mt-3">Whatsapp Admin</h3>
                                    <div class="text-icon"><i class="small-icon fa-brands fa-whatsapp"></i>0813-1855-4360 -
                                        Admin
                                    </div>
                                </div>
                                <!-- end whatsapp -->
                                <!-- start email -->
                                <div class="list-icon">
                                    <h3>Email</h3>
                                    <div class="text-icon"><i
                                            class="small-icon fa-solid fa-envelope"></i>hi@partnership.co.id
                                    </div>
                                </div>
                                <!-- end email -->

                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <h4 class="sub-title fw-600 mb-12px">
                                    Partner Media </h4>
                                <div class="text-footer-address ">
                                    <div class="list-icon">
                                        <h3>Instagram</h3>
                                        <div class="text-icon"><i
                                                class="small-icon fa-brands fa-instagram"></i>@partnership.co.id
                                        </div>
                                    </div>
                                    <div class="list-icon">
                                        <h3>Instagram</h3>
                                        <div class="text-icon"><i
                                                class="small-icon fa-brands fa-youtube"></i>@partnershipsolution
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="rekening">
            <div class="container container-gap-lg pt-0 pb-5">
                <div class="row">
                    <div class="col-sm-12 col-md-2 col-lg-3">
                        <h3 class="title-contact text-navy fw-600 mb-3">
                            Rekening </h3>
                    </div>
                    <div class="col-sm-12 col-md-10 col-lg-9">
                        <div class="row g-4">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="card border-0 shadow rounded-4">
                                    <div class="card-body text-center py-0">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <img src="{{ asset('assets/img/bank/BCA.png') }}" class="w-100"
                                                    alt="BCA">
                                            </div>
                                            <div class="col-9">
                                                <div class="list-icon mt-3">
                                                    <h3>Nomor Rekening</h3>
                                                    <div class="text-icon"><i
                                                            class="small-icon fa-regular fa-credit-card"></i>4377878328
                                                    </div>
                                                </div>
                                                <p class="text-grey">a/n PT. PARTNERSHIP PROCUREMENT SOLUTION</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="card border-0 shadow rounded-4">
                                    <div class="card-body text-center py-0">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <img src="{{ asset('assets/img/bank/BJB.png') }}" class="w-100"
                                                    alt="BJB">
                                            </div>
                                            <div class="col-9">
                                                <div class="list-icon mt-3">
                                                    <h3>Nomor Rekening</h3>
                                                    <div class="text-icon"><i
                                                            class="small-icon fa-regular fa-credit-card"></i>0142517663
                                                    </div>
                                                </div>
                                                <p class="text-grey">a/n PT. PARTNERSHIP PROCUREMENT SOLUTION</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="card border-0 shadow rounded-4">
                                    <div class="card-body text-center py-0">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <img src="{{ asset('assets/img/bank/BJB.png') }}" class="w-100"
                                                    alt="BJB">
                                            </div>
                                            <div class="col-9">
                                                <div class="list-icon mt-3">
                                                    <h3>Nomor Rekening</h3>
                                                    <div class="text-icon"><i
                                                            class="small-icon fa-regular fa-credit-card"></i>0082126000126
                                                    </div>
                                                </div>
                                                <p class="text-grey">a/n PT. PARTNERSHIP PROCUREMENT SOLUTION</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection

@push('scripts')
@endpush
