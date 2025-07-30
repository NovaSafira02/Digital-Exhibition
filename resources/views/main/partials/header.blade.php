<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ asset('img/logo.png') }}" alt="Logo Infinite Learning" style="max-height: 40px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('showcase*') ? 'active' : '' }}" href="/showcase">Showcase</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('tentang') ? 'active' : '' }}" href="/tentang">Tentang</a>
                </li>
            </ul>
            <a class="btn-custom rounded" href="#">Masuk</a>
        </div>
    </div>
</nav>

<style>
    .navbar-custom {
        background-color: white;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .navbar-toggler {
        border-color: #8a3dff;
    }

    .navbar-toggler:focus {
        box-shadow: 0 0 0 0.2rem rgba(138, 61, 255, 0.25);
    }

    .nav-link {
        color: black !important;
        font-weight: normal;
        margin: 0.5rem 1rem;
        transition: all 0.3s ease;
    }

    .nav-link.active {
        color: #fff !important;
        background-color: #8a3dff !important;
        padding: 0.4rem 1.5rem;
        border-radius: 12px;
        font-weight: 500;
        display: inline-block;
    }

    .btn-custom {
        background-color: #8a3dff;
        color: white;
        padding: 0.7rem 1.5rem;
        border-radius: 999px;
        font-weight: 500;
        text-decoration: none;
    }

    @media (max-width: 991.98px) {
        .nav-link {
            margin: 0.5rem 0;
        }
        .navbar-nav {
            margin-bottom: 1rem;
        }
        .btn-custom {
            display: inline-block;
            margin-bottom: 1rem;
        }
    }
</style>
{{-- <a class="btn-custom rounded" href="{{ route('login') }}">Masuk</a> --}}
        </div>
    </div>
</nav>
