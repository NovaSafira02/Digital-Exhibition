@extends('main.partials.main')

@section('content')
    <div class="hero d-flex align-items-center">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 col-md-12">
                    <h1 class="text-dark">Digital Exhibition: Showcase Proyek Mentee Infinite Learning</h1>
                    <p class="mb-3 text-justify">Proyek inovatif karya para mentee dari beragam program pelatihan Infinite Learning. Tidak hanya terbatas pada pengembangan Aplikasi dan Website, pameran digital ini juga mencakup karya terbaik dari bidang Artificial Intelligence (AI), Game Development, Network Security, hingga Red Hat System Administration.
                    </p>
                    <div class="row gy-3">
                        <div class="col-md-6 col-sm-12">
                            <div class="card h-100" style="background: #FAFAFA; border: none;">
                                <div class="card-body">
                                    <h5>Pembelajaran</h5>
                                    <p class="mb-0">Program pelatihan intensif yang dibimbing oleh mentor berpengalaman.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card h-100" style="background: #FAFAFA; border: none;">
                                <div class="card-body">
                                    <h5>Exhibition</h5>
                                    <p class="mb-0">Pameran digital yang dirancang untuk menampilkan dan menyoroti proyek-proyek kreatif para
                                        peserta.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/showcase" class="btn btn-custom rounded mt-3">Lihat Proyek Kami <img src="{{ asset('img/arrow-right.svg') }}" alt="panah kanan" class="ms-2" style="width: 1rem; height: 1rem;"></a>
                </div>
                <div class="col-lg-6 col-md-12 text-center">
                    <img src="{{ asset('img/div.png') }}" alt="Image of the exhibition" class="image-side img-fluid">
                </div>
            </div>
        </div>
    </div>

    <section class="hero2 d-flex align-items-center">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 col-md-12 order-lg-1 order-2">
                    <div class="video-wrapper shadow rounded-3 mb-3" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                        <iframe src="https://drive.google.com/file/d/1OWj-Bap27qSSF1lQNO2CxWAQwVY8GKQK/preview"
                                title="Video Best Project"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; fullscreen"
                                allowfullscreen
                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                        </iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 order-lg-2 order-1">
                    <h1 class="fs-2 fs-lg-1">Video Showcase Best Product All Program</h1>
                    <p class="text-justify"><b>Video showcase Best Project</b> menampilkan proyek-proyek terbaik yang telah dipilih berdasarkan kreativitas, inovasi, dan kualitas teknis yang unggul. Wawasan mendalam mengenai perjalanan mentee dalam mengembangkan solusi digital yang relevan dan berdampak nyata.
Proyek-proyek ini tidak hanya mencerminkan keterampilan teknis yang tinggi, tetapi juga kemampuan mentee dalam menerjemahkan ide menjadi solusi nyata yang dapat membawa perubahan positif dalam industri digital.</p>
<p class="text-justify"><b>Video showcase Project All Program</b> menampilkan berbagai proyek yang dikembangkan oleh mentee dari seluruh program di Infinite Learning. Setiap karya menunjukkan beragam pendekatan kreatif, inovasi, dan pemecahan masalah yang diterapkan dalam solusi digital yang relevan.
Terlihat bagaimana para mentee memanfaatkan keterampilan teknis dan pemikiran strategis untuk menciptakan proyek yang memecahkan tantangan dunia nyata.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: #FAFAFA">
        <div class="container">
            <div class="row w-100 mb-4">
                <div class="col-md-6">
                    <h1 class="fs-2">Proyek Showcase</h1>
                </div>
                <div class="col-md-6 text-md-end text-center mt-3 mt-md-0">
                    <a href="/showcase" class="btn btn-custom rounded">Lihat Proyek <img src="{{ asset('img/arrow-right.svg') }}" alt="panah kanan" class="ms-2" style="width: 1rem; height: 1rem;"></a>
                </div>
            </div>
            <div class="row mt-4 g-4">
                @foreach ($projects as $project)
                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="{{ route('project.show', $project->id) }}" class="text-decoration-none text-dark">
                            <div class="card h-100 shadow-sm position-relative">
                                @if ($project->is_best == 1)
                                    <img src="{{ asset('img/label-card.png') }}"
                                        alt="Best Project Label"
                                        class="position-absolute top-0 end-0"
                                        style="width: 120px; max-width: 40%; z-index: 10;">
                                @endif
                                <img src="{{ asset('storage/' . $project->thumbnail) }}"
                                    class="card-img-top"
                                    alt="{{ $project->nama_product }}"
                                    onerror="this.onerror=null;this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/b16d330d-2919-418a-a0bf-0ae83fe4cdaa.png';" />
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{ $project->nama_product }}</h5>
                                    <div class="mb-2 d-flex flex-wrap gap-1">
                                        <span class="badge badge-purple">by {{ $project->nama_group }}</span>
                                        <span class="badge badge-pink">{{ $project->Kategori->nama }}</span>
                                        <span class="badge badge-blue-outline">Batch {{ $project->Kategori->batch }}</span>
                                    </div>
                                    <div class="line-clamp-3 lh-lg small">
                                        {!! strip_tags($project->deskripsi, '<b><strong><i><em>') !!}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container mb-5">
            <div class="logo-container">
                <h2 class="mb-4 text-center">Mitra Terbaik Kami</h2>
                <div class="row justify-content-center align-items-center gy-4">
                    <div class="col-6 col-md-4 text-center">
                        <img class="img-fluid px-3" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/54/Coat_of_arms_of_Riau_Islands.svg/1200px-Coat_of_arms_of_Riau_Islands.svg.png"
                            alt="Kepulauan Riau" style="max-height: 120px; background-color:white; padding:4px; border-radius:4px;">
                    </div>
                    <div class="col-6 col-md-4 text-center">
                        <img class="img-fluid px-3" src="https://upload.wikimedia.org/wikipedia/commons/3/39/BI_Logo.png"
                            alt="Bank Indonesia" style="max-height: 120px; background-color:white; padding:4px; border-radius:4px;">
                    </div>
                    <div class="col-6 col-md-4 text-center">
                        <img class="img-fluid px-3" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Logo_of_Ministry_of_Communication_and_Information_Technology_of_the_Republic_of_Indonesia.svg/2060px-Logo_of_Ministry_of_Communication_and_Information_Technology_of_the_Republic_of_Indonesia.svg.png"
                            alt="KOMINFO" style="max-height: 120px; background-color:white; padding:4px; border-radius:4px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: #FAFAFA">
        <div class="container text-center">
            <h1 class="my-4 fs-2">Video Testimoni Alumni</h1>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="video-wrapper shadow rounded-3 mb-4" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                        <iframe src="https://drive.google.com/file/d/11z8VjRHDdmmP6WSCeTizM9HDZ8D1Htt0/preview"
                                title="Testimoni Alumni"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; fullscreen"
                                allowfullscreen
                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
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

        .text-justify {
            text-align: justify;
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
            padding: 4rem 1rem;
        }

        @media (max-width: 767.98px) {
            .hero, .hero2 {
                padding: 3rem 1rem;
                min-height: auto;
            }
        }

        .hero h1 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #4b2aad;
        }

        @media (min-width: 992px) {
            .hero h1, .hero2 h1 {
                font-size: 2.5rem;
            }
        }

        .hero p, .hero2 p {
            font-size: 1rem;
            margin-bottom: 1.5rem;
            color: #444;
        }

        .hero-text {
            max-width: 600px;
        }

        .btn-custom {
            background-color: #8a3dff;
            color: white;
            padding: 0.6rem 1.2rem;
            border-radius: 999px;
            font-weight: 500;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #6c2edc;
            color: white;
        }

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .image-side {
            max-width: 100%;
            height: auto;
        }

        .hero2 {
            min-height: auto;
            background-color: white;
            padding: 4rem 1rem;
        }

        .hero2 h1 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .project-card {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.2s;
            cursor: pointer;
        }

        .project-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 14px 32px rgb(0 0 0 / 0.2);
        }

        .logo-container {
            text-align: center;
            margin: 30px 0;
        }

        .card-img-top-testi {
            border-radius: 100%;
            width: 100px;
            margin: 20px auto;
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

        .card {
            background-color: #fff;
            color: #000;
            border-radius: 0.5rem;
            box-shadow: 0 8px 24px rgb(0 0 0 / 0.12);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 14px 32px rgb(0 0 0 / 0.2);
        }

        .card-img-top {
            object-fit: cover;
            height: 180px;
            width: 100%;
        }

        .badge {
            padding: 0.35em 0.65em;
            display: inline-block;
            margin-right: 0.25rem;
            margin-bottom: 0.25rem;
        }

        .badge-purple {
            background-color: #8A3DFF;
            color: #F4F3F9;
            font-size: 0.675rem;
            font-weight: 600;
            text-transform: capitalize;
        }

        .badge-pink {
            background-color: transparent;
            color: #BE2CD2;
            border: #BE2CD2 1px solid;
            font-size: 0.675rem;
            font-weight: 600;
            text-transform: capitalize;
        }

        .badge-blue-outline {
            border: 1px solid #214CE0;
            color: #214CE0;
            background-color: transparent;
            font-weight: 600;
            font-size: 0.675rem;
            text-transform: capitalize;
        }
    </style>
@endsection
