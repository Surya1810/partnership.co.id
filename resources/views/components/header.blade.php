        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
            <div class="container-fluid px-lg-5 py-2">
                <a class="navbar-brand" href="{{ route('landing') }}">
                    <img src="{{ asset('assets/img/logo/light/main.png') }}" alt="logo_main" height="24">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        @if (Route::is('landing'))
                            <li class="nav-item">
                                <button class="nav-link active" aria-current="page" onclick="backToTop()"
                                    id="homee">Beranda</button>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('landing') }}"
                                    class="nav-link {{ request()->is('/') ? 'active' : '' }}">Beranda</a>
                            </li>
                        @endif
                        <li class="nav-item dropdown">
                            <button class="nav-link dropdown-toggle {{ request()->is('about*') ? 'active' : '' }}"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">Info Perusahaan</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('about') }}">Tentang kami</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('product') }}">Produk & Layanan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('client*') ? 'active' : '' }}"
                                href="{{ route('client') }}">Client</a>
                        </li>
                        <li class="nav-item dropdown">
                            <button class="nav-link dropdown-toggle {{ request()->is('project*') ? 'active' : '' }}"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">Project</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('gallery') }}">Project Gallery</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('project') }}">Project Reference</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('contact*') ? 'active' : '' }}"
                                href="{{ route('contact') }}">Hubungi kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
