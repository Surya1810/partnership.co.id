 <footer>
     <div class="container h-100" style="height: 70svh; color: #FFFFFF;padding-bottom: 40px">
         <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 pt-5 mt-5 pb-2 mb-2">
             <div class="col-12 col-md-5 mb-3">
                 <a href="{{ route('landing') }}"
                     class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                     <img src="{{ asset('assets/img/logo/light/main.png') }}" alt="logo_main" height="32px">
                 </a>
                 <p class="text-secondary"><strong>Kantor Pusat</strong></p>
                 <ul class="nav flex-column">
                     <li class="nav-item mb-2">
                         <p><strong>Partnership Head Office<br></strong>Jl. Golf Bar. III No.1, Sukamiskin, Kec.
                             Arcamanik, Kota Bandung, Jawa Barat 40293</p>
                     </li>
                 </ul>
                 <p class="text-secondary"><strong>Workshop</strong></p>
                 <ul class="nav flex-column">
                     <li class="nav-item">
                         <p><strong>Partner Workshop<br></strong>Jl. Cingised No.2 Arcamanik, Kota
                             Bandung, Jawa Barat 40291</p>
                     </li>
                 </ul>
                 <p class="text-secondary"><strong>Partner Care</strong></p>
                 <ul class="nav flex-column">
                     <li class="nav-item mb-2"><a href="https://wa.me/6281318554360" target="_blank"
                             class="nav-link p-0 text-white"><i class="fa-brands fa-whatsapp fa-xl me-2"></i>
                             0813 1855 4360 - Admin</a>
                     </li>
                 </ul>
             </div>

             <div class="col-md-1"></div>

             <div class="col-4 col-md-2 mb-3">
                 <h5 style="color: #0055FF"><strong>Info Perusahaan</strong></h5>
                 <ul class="nav flex-column">
                     <li class="nav-item mb-2"><a href="{{ route('about') }}" class="nav-link p-0 text-white">Tentang
                             kami</a>
                     </li>
                     <li class="nav-item mb-2"><a href="{{ route('product') }}" class="nav-link p-0 text-white">Produk &
                             Layanan</a>
                     </li>
                     {{-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Karir</a>
                            </li> --}}
                 </ul>
             </div>

             <div class="col-4 col-md-2 mb-3">
                 <h5 style="color: #0055FF"><strong>Partnership</strong></h5>
                 <ul class="nav flex-column">
                     <li class="nav-item mb-2"><a href="{{ route('gallery') }}" class="nav-link p-0 text-white">Project
                             Gallery</a>
                     </li>
                     <li class="nav-item mb-2"><a href="{{ route('project') }}" class="nav-link p-0 text-white">Project
                             References</a>
                     </li>

                 </ul>
             </div>

             <div class="col-4 col-md-2 mb-3">
                 <h5 style="color: #0055FF"><strong>Get in touch</strong></h5>
                 <ul class="nav flex-column">
                     <li class="nav-item mb-2"><a href="{{ route('contact') }}" class="nav-link p-0 text-white">Hubungi
                             kami</a>
                     </li>
                     {{-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a>
                            </li> --}}
                 </ul>
             </div>
         </div>
         <div class="row pb-3 pt-4">
             <div class="col-12 text-md-end text-center">
                 <a href="https://www.instagram.com/partnership.co.id/" target="_blank" class="text-white"
                     style="margin-left: 12px"><i class="fa-brands fa-instagram fa-xl"></i></a>
                 <a href="https://www.youtube.com/@partnershipsolution" target="_blank" class="text-white"
                     style="margin-left: 12px"><i class="fa-brands fa-youtube fa-xl"></i></a>
             </div>
         </div>
         <div class="row py-3 text-white border-top mt-2">
             <small class="col-12 col-md-5 text-white text-md-start text-center">&copy; 2025 PT Partnership
                 Procurement
                 Solution. All
                 rights
                 reserved</small>

             <a href="{{ route('landing') }}"
                 class="col-12 col-md-2 d-flex align-items-center justify-content-center mb-3 pt-2 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                 <img src="{{ asset('assets/img/logo/icon_p_white.png') }}" alt="icon_main" height="32px">
             </a>

             <div class="col-12 col-md-5 text-md-end text-center">
                 <a href="#" class="text-white" style="text-decoration:none"><small>Syarat &
                         Ketentuan</small></a>
                 <a href="#" class="text-white" style="text-decoration:none; margin-left: 12px"><small>Kebijakan
                         Privasi</small></a>
             </div>
         </div>
     </div>
 </footer>
