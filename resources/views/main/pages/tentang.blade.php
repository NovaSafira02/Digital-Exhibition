@extends('main.partials.main')

@section('content')
    <section class="hero2 d-flex align-items-center py-4 py-md-5">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                    <h1 class="fs-3 fs-md-4 fs-lg-5">Digital Exhibition</h1>
                    <p class="text-justify">Digital Exhibition adalah sebuah platform website yang dirancang untuk memungkinkan para peserta program
                        pelatihan mempresentasikan karya secara digital/virtual. Platform website ini menjadi wadah untuk
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
                    <h1 class="fs-3 fs-md-4 fs-lg-5">Proyek Grup Mentee Yang Ditampilkan</h1>
                    <p class="text-justify">Project yang ditampilkan terbagi dari beberapa kategori di beberapa program, ada juga grup yang
                        collab antar program di Infinite Learning.
                    </p><br>
                    <p class="text-justify">Bisa di lihat pada gambar, juga masih banyak lagi program dan kategori proyek kolaborasi di Infinite Learning.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Section Template -->
    <section class="hero2 d-flex align-items-center py-4 py-md-5">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                    <h1 class="fs-3 fs-md-4 fs-lg-5">Merge Collab (Web & Mobile & AI)</h1>
                    <p class="text-justify">Hasil kolaborasi tiga program sekaligus, yaitu Program Web, Program Mobile, dan Program Artificial Intelligence (AI). Proyek-proyek dalam kategori ini mengintegrasikan teknologi web modern, pengembangan aplikasi mobile, serta kecerdasan buatan untuk menciptakan solusi digital yang inovatif dan komprehensif. Peserta memadukan keahlian frontend dan backend web development, kemampuan membuat aplikasi mobile yang responsif, serta algoritma AI seperti machine learning dan natural language processing, Peserta diajak membuat solusi end-to-end dari sisi antarmuka pengguna hingga kecerdasan buatan seperti chatbot atau sistem rekomendasi. Sehingga menghasilkan karya yang multifungsi dan mampu menjawab tantangan teknologi masa depan.</p>
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
                    <h1 class="fs-3 fs-md-4 fs-lg-5">Merge (Web & Mobile)</h1>
                    <p class="text-justify">Kolaborasi antara Program Web dan Program Mobile, yang menggabungkan kekuatan teknologi pengembangan web dan aplikasi mobile. Proyek-proyek ini fokus pada pembuatan produk digital yang berjalan mulus di berbagai platform, baik desktop maupun perangkat mobile. Peserta menggunakan framework dan tools modern untuk memastikan user experience yang responsif dan interaktif, sekaligus memanfaatkan kemampuan mobile device seperti sensor dan push notification untuk meningkatkan engagement pengguna.
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
                    <p class="text-justify">Menggabungkan keahlian dari Program Web dan Program Artificial Intelligence. Proyek dalam kategori ini menonjolkan integrasi teknologi web dengan kecerdasan buatan untuk menghadirkan aplikasi yang tidak hanya interaktif, tetapi juga cerdas. Contohnya termasuk aplikasi web dengan fitur chatbot otomatis, sistem rekomendasi berbasis AI, dan analisis data real-time. Dengan kolaborasi ini, peserta mampu menunjukkan inovasi teknologi yang mampu meningkatkan efektivitas dan efisiensi pengguna.
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
                    <p class="text-justify">Website adalah hasil karya murni dari peserta Program Web. Proyek-proyek ini menampilkan keahlian dalam membangun berbagai jenis website, mulai dari landing page sederhana hingga aplikasi web kompleks. Peserta mengimplementasikan teknologi frontend seperti HTML5, CSS3, JavaScript, serta framework modern seperti React atau Vue.js. Untuk sisi backend, digunakan Node.js dan Express.js yang memungkinkan pengembangan API dan server-side logic secara efisien dan scalable. Fokus utama proyek-proyek ini adalah pada desain responsif, performa optimal, dan user experience yang intuitif, sekaligus memperlihatkan arsitektur full-stack yang solid dan siap digunakan di lingkungan produksi.
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
                    <p class="text-justify">Game merupakan karya dari peserta Program Game yang berfokus pada pengembangan video game dengan berbagai genre dan platform. Proyek ini menampilkan pemahaman mendalam tentang game design, pemrograman game engine (seperti Unity atau Unreal Engine), serta aspek estetika visual dan audio. Peserta menggabungkan storytelling, mekanik permainan, dan teknologi grafis untuk menciptakan pengalaman bermain yang menarik dan interaktif.
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
                    <p class="text-justify">Artificial Intelligence berisi proyek yang dikembangkan oleh peserta Program AI dengan fokus utama pada pengembangan solusi berbasis kecerdasan buatan. Peserta mengerjakan aplikasi seperti machine learning, computer vision, natural language processing, dan automasi cerdas. Proyek ini menampilkan kemampuan dalam mengolah data besar, membangun model prediktif, dan mengimplementasikan AI dalam berbagai konteks praktis yang dapat membantu berbagai sektor industri.
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
                    <p class="text-justify">Hybrid Cloud & Red Hat (HCRH) adalah hasil karya peserta program yang berfokus pada teknologi cloud computing dengan pendekatan hybrid dan penggunaan platform Red Hat. Proyek-proyek ini menunjukkan penerapan teknologi containerization (seperti Kubernetes dan OpenShift), otomasi cloud, serta manajemen infrastruktur TI yang scalable dan aman. Peserta memperlihatkan pemahaman mendalam dalam mengelola lingkungan cloud hybrid yang mendukung transformasi digital perusahaan.
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
                    <h1 class="fs-3 fs-md-4 fs-lg-5">Network Security</h1>
                    <p class="text-justify">Network Security adalah kumpulan proyek yang dikembangkan oleh peserta Program Network Security, dengan fokus pada perlindungan sistem dan jaringan dari ancaman siber. Proyek ini meliputi penerapan teknologi firewall, enkripsi data, penetration testing, serta pengembangan sistem deteksi dan pencegahan intrusi. Peserta menunjukkan keahlian dalam menjaga keamanan infrastruktur digital, mengidentifikasi celah keamanan, dan mengimplementasikan solusi proteksi yang efektif.
                    </p>
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

        .text-justify {
            text-align: justify;
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
