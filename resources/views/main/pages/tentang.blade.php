@extends('main.partials.main')

@section('content')
    <section class="hero2 d-flex align-items-center py-4 py-md-5">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                    <h1 class="fs-3 fs-md-4 fs-lg-5">Digital Exhibition</h1>
                    <p>Digital Exhibition adalah sebuah platform yang dirancang untuk memungkinkan para peserta program
                        pelatihan mempresentasikan karya mereka dalam bentuk website. Platform ini menjadi wadah untuk
                        menampilkan kreativitas serta kompetensi teknis yang telah mereka kembangkan selama mengikuti pelatihan.
                    </p>
                    <div class="row gy-3">
                        <div class="col-md-6 col-sm-12">
                            <div class="card h-100" style="background: #FAFAFA; border: none;">
                                <div class="card-body">
                                    <h5 class="fs-6 fs-md-5">Pembelajaran</h5>
                                    <p class="small">Program pelatihan intensif yang dibimbing oleh mentor berpengalaman.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card h-100" style="background: #FAFAFA; border: none;">
                                <div class="card-body">
                                    <h5 class="fs-6 fs-md-5">Exhibition</h5>
                                    <p class="small">Pameran digital yang dirancang untuk menampilkan dan menyoroti proyek-proyek kreatif para
                                        peserta.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 text-center order-1 order-lg-2 mb-4 mb-lg-0">
                    <img src="{{ asset('img/div2.png') }}" alt="Image of the exhibition" class="image-side img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="hero2 d-flex align-items-center py-4 py-md-5" style="background: #fafafa">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-8 col-md-12 mb-4 mb-lg-0">
                    <img src="{{ asset('img/tentang.png') }}" alt="Image of the exhibition" class="image-side img-fluid">
                </div>
                <div class="col-lg-4 col-md-12">
                    <h1 class="fs-3 fs-md-4 fs-lg-5">Proyek Mentee Group Yang Ditampilkan</h1>
                    <p>Project yang ditampilkan terbagi dari beberapa kelompok/tim di beberapa program, ada juga kelompok yang
                        collab antar program pelatihan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Section Template -->
    <section class="hero2 d-flex align-items-center py-4 py-md-5">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                    <h1 class="fs-3 fs-md-4 fs-lg-5">Merge Collab (Web & Mob & AI)</h1>
                    <p>Program merupakan program yang membangun aplikasi lengkap yang mencakup pengembangan web, mobile, dan
                        integrasi teknologi AI. Peserta diajak membuat solusi end-to-end dari sisi antarmuka pengguna hingga
                        kecerdasan buatan seperti chatbot atau sistem rekomendasi.
                    </p>
                </div>
                <div class="col-lg-6 col-md-12 text-center order-1 order-lg-2 mb-4 mb-lg-0">
                    <img src="{{ asset('img/div2.png') }}" alt="Image of the exhibition" class="image-side img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="hero2 d-flex align-items-center py-4 py-md-5" style="background: #fafafa">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6 col-md-12 text-center mb-4 mb-lg-0">
                    <img src="{{ asset('img/div2.png') }}" alt="Image of the exhibition" class="image-side img-fluid">
                </div>
                <div class="col-lg-6 col-md-12">
                    <h1 class="fs-3 fs-md-4 fs-lg-5">Merge (Web & Mob)</h1>
                    <p>Program ini berfokus pada pengembangan aplikasi lintas platform, yaitu website dan aplikasi mobile, tanpa
                        komponen AI. Program ini cocok bagi peserta yang ingin membangun sistem terpadu yang dapat diakses di
                        berbagai perangkat.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="hero2 d-flex align-items-center py-4 py-md-5">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                    <h1 class="fs-3 fs-md-4 fs-lg-5">Collab (Web & AI)</h1>
                    <p>Program ini merupakan penggabungan antara teknologi web dan AI, seperti penggunaan Natural Language
                        Processing (NLP) atau computer vision dalam aplikasi web, namun tanpa pengembangan sisi mobile.
                    </p>
                </div>
                <div class="col-lg-6 col-md-12 text-center order-1 order-lg-2 mb-4 mb-lg-0">
                    <img src="{{ asset('img/div2.png') }}" alt="Image of the exhibition" class="image-side img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="hero2 d-flex align-items-center py-4 py-md-5" style="background: #fafafa">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6 col-md-12 text-center mb-4 mb-lg-0">
                    <img src="{{ asset('img/div2.png') }}" alt="Image of the exhibition" class="image-side img-fluid">
                </div>
                <div class="col-lg-6 col-md-12">
                    <h1 class="fs-3 fs-md-4 fs-lg-5">Website</h1>
                    <p>Program website merupakan pembuatan aplikasi berbasis website dengan
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="hero2 d-flex align-items-center py-4 py-md-5">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                    <h1 class="fs-3 fs-md-4 fs-lg-5">Game</h1>
                    <p>Berfokus pada pengembangan game berbasis dekstop maupun mobile dengan memanfaatkan game engine seperti Unity.
                    </p>
                </div>
                <div class="col-lg-6 col-md-12 text-center order-1 order-lg-2 mb-4 mb-lg-0">
                    <img src="{{ asset('img/div2.png') }}" alt="Image of the exhibition" class="image-side img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="hero2 d-flex align-items-center py-4 py-md-5" style="background: #fafafa">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6 col-md-12 text-center mb-4 mb-lg-0">
                    <img src="{{ asset('img/div2.png') }}" alt="Image of the exhibition" class="image-side img-fluid">
                </div>
                <div class="col-lg-6 col-md-12">
                    <h1 class="fs-3 fs-md-4 fs-lg-5">Artificial Intelligence</h1>
                    <p>Dirancang untuk memberikan pemahaman menyeluruh tentang kecerdasan buatan serta penerapannya dalam
                        pengembangan aplikasi digital. Dalam program ini, peserta akan mempelajari dasar-dasar Artificial
                        Intelligence, termasuk pengenalan machine learning, algoritma pembelajaran seperti klasifikasi dan
                        regresi, serta cara kerja model AI dalam mengolah data.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="hero2 d-flex align-items-center py-4 py-md-5">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                    <h1 class="fs-3 fs-md-4 fs-lg-5">HCRH</h1>
                    <p>Hybrid Cloud & Red Hat, yaitu pelatihan profesional yang mengajarkan peserta untuk mengelola dan
                        menjalankan aplikasi di lingkungan Hybrid Cloud menggunakan teknologi Red Hat seperti OpenShift dan
                        Ansible.
                    </p>
                </div>
                <div class="col-lg-6 col-md-12 text-center order-1 order-lg-2 mb-4 mb-lg-0">
                    <img src="{{ asset('img/div2.png') }}" alt="Image of the exhibition" class="image-side img-fluid">
                </div>
            </div>
        </div>
    </section>
@endsection
@section('css')
    <style>
        .navbar-custom {
            background-color: white;
        }

        .nav-link {
            color: black !important;
            font-weight: normal;
            margin: 0.5rem 1rem;
        }

        .nav-link.active {
            color: #fff !important;
            background-color: #8a3dff !important;
            padding: 0.4rem 1.5rem;
            border-radius: 12px;
            font-weight: 500;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .btn-purple {
            background-color: #8a3dff;
            color: white;
        }

        .btn-purple:hover {
            background-color: darkviolet;
            color: white;
        }

        .btn-light {
            background-color: lightpurple;
            color: #8a3dff;
        }

        .hero {
            min-height: auto;
            background-color: #f8f9fa;
            padding: 3rem 1rem;
        }

        .hero h1 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #4b2aad;
        }

        .hero p {
            font-size: 1rem;
            margin-bottom: 1.5rem;
            color: #444;
        }

        .hero-text {
            max-width: 100%;
        }

        .btn-custom {
            background-color: #8a3dff;
            color: white;
            padding: 0.5rem 1.2rem;
            border-radius: 999px;
            font-weight: 500;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #6c2edc;
            color: white;
        }

        .image-side {
            max-width: 100%;
            height: auto;
        }

        .hero2 {
            min-height: auto;
            background-color: white;
            padding: 3rem 1rem;
        }

        .hero2 h1 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .hero2 p {
            font-size: 1rem;
            margin-bottom: 1.5rem;
            color: #444;
        }

        .hero-text {
            max-width: 100%;
        }

        .project-card {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.2s;
        }

        .project-card:hover {
            transform: scale(1.03);
        }

        .logo-container {
            text-align: center;
            margin: 30px 0;
        }

        .logo-container img {
            max-width: 120px;
            margin: 0 10px 15px;
        }

        .card-img-top-testi {
            border-radius: 100%;
            width: 80px;
            margin: 15px auto;
        }

        .footer {
            background-color: #1a1a1a;
            padding: 20px 0;
            color: #fff;
        }

        .footer .social-icons a {
            margin: 0 10px;
            color: #fff;
        }

        /* Media Queries untuk Responsivitas */
        @media (max-width: 767.98px) {
            .hero, .hero2 {
                padding: 2rem 0.75rem;
                min-height: auto;
            }

            .hero h1, .hero2 h1 {
                font-size: 1.75rem;
            }

            .hero p, .hero2 p {
                font-size: 0.95rem;
            }

            .nav-link {
                margin: 0.25rem 0.5rem;
            }

            .nav-link.active {
                padding: 0.3rem 1rem;
            }

            .btn-custom {
                padding: 0.4rem 1rem;
                font-size: 0.9rem;
            }

            .logo-container img {
                max-width: 100px;
                margin: 0 5px 10px;
            }
        }

        @media (max-width: 575.98px) {
            .hero h1, .hero2 h1 {
                font-size: 1.5rem;
            }

            .hero p, .hero2 p {
                font-size: 0.9rem;
            }

            .card-body h5 {
                font-size: 1.1rem;
            }

            .card-body p {
                font-size: 0.85rem;
            }
        }
    </style>
@endsection
