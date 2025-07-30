@extends('main.partials.main')

@section('content')
    <!-- Top large image with phones + tablets + laptop + logo -->
    @if (session('success'))
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 9999">
            <div id="toastSuccess" class="toast align-items-center text-bg-success border-0 show" role="alert"
                aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
        </div>
    @endif
    <div class="container py-4">
        <div class="mb-4">
            <div class="d-flex flex-wrap justify-content-center align-items-center gap-3 p-2 p-md-3 position-relative">
                @if ($project->is_best == 1)
                    <img src="{{ asset('img/label-card.png') }}"
                        alt="Best Project Label"
                        class="position-absolute top-0 end-0 m-2 m-md-3"
                        style="width: 120px; max-width: 30%; z-index: 10;">
                @endif
                <img src="{{ asset('storage/' . $project->thumbnail) }}" class="img-fluid img-card"
                    alt="{{ $project->nama_product }}" />
            </div>

            <!-- Video + Technologies + Links row -->
            <div class="row gy-4 gx-md-4">
                <div class="col-12 col-lg-8">
                    <div class="video-wrapper shadow rounded-3 mb-4">
                        <iframe src="{{ $project->link_video }}" title="{{ $project->nama_product }} Project Overview" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; fullscreen"
                            allowfullscreen></iframe>
                    </div>
                    <!-- Title and badges -->
                    <div class="d-flex flex-wrap align-items-center mb-3 gap-3">
                        <div class="product-logo-container">
                            <img src="{{ asset('storage/' . $project->logo) }}" alt="{{ $project->nama_product }} Logo" class="product-logo">
                        </div>
                        <h1 class="fw-bold mb-0 fs-3 fs-md-2">{{ $project->nama_product }}</h1>
                    </div>
                    <div class="mt-3 mb-3 d-flex flex-wrap gap-2 badge-group">
                        <span class="badge badge-purple p-2">by {{ $project->nama_group }}</span>
                        <span class="badge badge-pink p-2">{{ $project->Kategori->nama }}</span>
                        <span class="badge badge-blue-outline p-2">Batch {{ $project->Kategori->batch }}</span>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="rounded-container shadow-sm p-3 mb-4">
                        <h5 class="mb-3 fs-6 fs-md-5">Teknologi Yang Digunakan</h5>
                        <div class="row tech-container g-2">
                            @php
                                $techCount = count($project->Teches);
                                $techesPerColumn = 3;
                                $columnCount = ceil($techCount / $techesPerColumn);
                                $techIndex = 0;
                            @endphp

                            @for ($col = 0; $col < $columnCount; $col++)
                                <div class="col-6 col-md-{{ 12 / min($columnCount, 3) }} mb-2">
                                    <ul class="tech-icons ps-0 mb-0">
                                        @for ($i = 0; $i < $techesPerColumn && $techIndex < $techCount; $i++)
                                            @php $tech = $project->Teches[$techIndex++]; @endphp
                                            <li class="d-flex align-items-center mb-2">
                                                <img src="{{ asset('storage/' . $tech->icon) }}" alt="{{ $tech->nama }}" class="me-2" width="20" height="20">
                                                <span class="small">{{ $tech->nama }}</span>
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="rounded-container shadow-sm p-3 mb-4">
                        <h5 class="mb-3 fs-6 fs-md-5">Link Proyek</h5>
                        <div class="project-links">
                            @if($project->link_figma)
                            <div class="link-item d-flex align-items-center">
                                <div class="me-2">
                                    <img src="{{ asset('img/icons/android.svg') }}" alt="Prototype" width="20" height="20">
                                </div>
                                <a href="{{ $project->link_figma }}" class="link-blue text-decoration-none small" target="_blank" rel="noopener">
                                    Preview Android
                                </a>
                            </div>
                            @endif

                            @if($project->link_website)
                            <div class="link-item d-flex align-items-center">
                                <div class="me-2">
                                    <img src="{{ asset('img/icons/website.svg') }}" alt="Web" width="20" height="20">
                                </div>
                                <a href="{{ $project->link_website }}" class="link-blue text-decoration-none small" target="_blank" rel="noopener">
                                    Preview Website
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="rounded-container shadow-sm p-3">
                        <h5 class="mb-3 fs-6 fs-md-5">Tertarik Dengan Proyek Ini?</h5>
                        <div class="link-item d-flex align-items-center">
                            <div class="me-2">
                                <img src="{{ asset('img/icons/mail.png') }}" alt="Email" width="20" height="20">
                            </div>
                            <a href="mailto:info@infinitelearning.id" class="link-blue text-decoration-none small" target="_blank" rel="noopener">
                                info@infinitelearning.id
                            </a>
                        </div>
                        <div class="link-item d-flex align-items-center">
                            <div class="me-2">
                                <img src="{{ asset('img/icons/linkedin.svg') }}" alt="LinkedIn" width="20" height="20">
                            </div>
                            <a href="https://www.linkedin.com/company/infinite-learning-indonesia" class="link-blue text-decoration-none small" target="_blank" rel="noopener">
                                Infinite Learning Indonesia
                            </a>
                        </div>
                        <button class="btn text-white fw-bold w-100 p-2 mt-2" style="background-color: #8A3DFF;"
                            data-bs-toggle="modal" data-bs-target="#modalSetujui">Hubungi
                            Admin</button>
                    </div>
                </div>
            </div>

            <!-- Project description -->
            <section class="mt-4">
                <h3 class="section-title fs-4">Deskripsi Project</h3>
                <div class="project-description text-justify fs-6">{!! $project->deskripsi !!}</div>
            </section>

            <!-- Mentor Group -->
            <section>
                <h3 class="section-title fs-4">Mentor Group</h3>
                <div class="row g-3 fs-6">
                    @foreach ($project->MentorGroup as $mentorGroup)
                        @php
                            $mentorUsername = optional($mentorGroup->MentorProject->Mentor)->username;
                        @endphp

                        @if ($mentorUsername)
                            <div class="col-6 col-md-4 col-lg-3 team-member d-flex align-items-center">
                                <span class="person-icon">👤</span>
                                <div class="ms-2">{{ $mentorUsername }}</div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </section>

            @php
                $groupedMembers = $project->Member->groupBy(fn($member) => $member->MemberMaster->group);
            @endphp

            <!-- Team Web -->
            @foreach ($groupedMembers as $group => $members)
                <section>
                    <h3 class="section-title fs-4">Tim {{ $group }}</h3>
                    <div class="row g-3">
                        @foreach ($members as $member)
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 team-member">
                                <div class="d-flex align-items-center">
                                    <div class="icon-circle" aria-label="User Icon">
                                        {{ strtoupper(substr($member->nama, 0, 1)) }}
                                    </div>
                                    <div>
                                        <div class="name">{{ $member->nama }}</div>
                                        <div class="role small">{{ $member->MemberMaster->role }}</div>
                                        <a href="{{ $member->linkedIn }}"
                                            class="linkedin-link d-inline-flex align-items-center small" target="_blank"
                                            rel="noopener">
                                            <img src="{{ asset('img/logo-linkind.png') }}" class="me-1"
                                                style="width: 0.875rem; height: 0.875rem;">
                                            LinkedIn
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            @endforeach
        </div>

        <!-- Modal tidak diubah karena sudah cukup responsif -->
        <div class="modal fade" id="modalSetujui" tabindex="-1" aria-labelledby="modalSetujuiLabel" aria-hidden="true">
            <!-- ... kode modal tetap sama ... -->
        </div>
    </div>
@endsection

@section('css')
    <style>
        body {
            background: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #222;
        }

        .fx-bold label {
            font-weight: 600;
        }

        .project-description {
            font-size: 1rem;
            overflow-wrap: break-word;
            word-wrap: break-word;
        }

        /* Pastikan semua elemen di dalam deskripsi juga memiliki font yang sesuai */
        .project-description p,
        .project-description li,
        .project-description span,
        .project-description div,
        .project-description h1,
        .project-description h2,
        .project-description h3,
        .project-description h4,
        .project-description h5,
        .project-description h6 {
            font-size: 1rem !important;
            max-width: 100% !important;
            overflow-wrap: break-word !important;
        }

        /* Pastikan gambar dalam deskripsi responsif */
        .project-description img {
            max-width: 100% !important;
            height: auto !important;
        }

        .textarea-vertical-center {
            align-items: center;
            text-align: left;
            padding-top: 3.5rem;
        }

        .navbar-custom {
            background-color: white;
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

        .btn-custom {
            background-color: #8a3dff;
            color: white;
            padding: 0.6rem 1.5rem;
            border-radius: 999px;
            font-weight: 500;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-custom-cancel {
            background-color: rgba(92, 92, 92, 0.2);
            color: #5C5C5C;
            padding: 0.6rem 1.5rem;
            border-radius: 999px;
            font-weight: 500;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-light {
            background-color: lightpurple;
            color: #8a3dff;
        }

        .btn-contact-admin {
            display: block;
            width: 100%;
            padding: 10px 16px;
            background: linear-gradient(135deg, #7a4dff, #a78bfa);
            color: #fff;
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 14px rgba(122, 77, 255, 0.4);
            transition: all 0.3s ease-in-out;
        }

        .btn-contact-admin:hover {
            background: linear-gradient(135deg, #5a34e0, #8c6dff);
            box-shadow: 0 6px 18px rgba(90, 52, 224, 0.5);
            transform: translateY(-2px);
        }

        .rounded-container {
            border-radius: 1rem;
            background: #fff;
            padding: 1rem;
            border: 1px solid #ddd;
        }

        .img-card {
            border-radius: 0.75rem;
            border: 1px solid #ccc;
            background: #f7f9fa;
            padding: 0.75rem;
            max-width: 100%;
        }

        .logo-text {
            color: #237a68;
            font-weight: 700;
        }

        .logo-subtext {
            font-weight: 500;
            font-size: 0.9rem;
            color: #494949;
        }

        .badge-group .badge {
            font-size: 0.75rem;
            font-weight: 600;
            display: inline-block;
            margin-right: 0.25rem;
            margin-bottom: 0.25rem;
        }

        .badge-purple {
            background-color: #8A3DFF;
            color: #F4F3F9;
            font-size: 0.7rem;
            font-weight: 600;
            text-transform: capitalize;
        }

        .badge-pink {
            background-color: transparent;
            color: #BE2CD2;
            border: #BE2CD2 1px solid;
            font-size: 0.7rem;
            font-weight: 600;
            text-transform: capitalize;
        }

        .badge-blue-outline {
            border: 1px solid #214CE0;
            color: #214CE0;
            background-color: transparent;
            font-weight: 600;
            font-size: 0.7rem;
        }

        .section-title {
            font-weight: 600;
            font-size: 1.25rem;
            margin-top: 2.5rem;
            margin-bottom: 1.25rem;
            color: #222;
        }

        .link-blue {
            color: #1565c0;
            text-decoration: underline;
        }

        .person-icon {
            font-size: 1.2rem;
            vertical-align: middle;
            margin-right: 0.3rem;
            color: #444;
        }

        .team-member .icon-circle {
            background-color: #7a4dff;
            color: white;
            border-radius: 50%;
            height: 36px;
            width: 36px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            font-weight: 700;
            font-size: 1rem;
            margin-right: 0.8rem;
            flex-shrink: 0;
        }

        .team-member .name {
            font-weight: 600;
            font-size: 0.95rem;
        }

        .team-member .role {
            font-size: 0.8rem;
            color: #555;
        }

        .team-member .linkedin {
            font-size: 0.75rem;
            color: #555;
            display: flex;
            align-items: center;
            gap: 0.25rem;
            margin-top: 0.1rem;
        }

        .team-member .linkedin svg {
            width: 14px;
            height: 14px;
            fill: #0a66c2;
        }

        a.linkedin-link:hover {
            text-decoration: none;
            color: #0a66c2;
        }

        blockquote {
            margin: 0;
            padding-left: 1rem;
            border-left: 4px solid #237a68;
            font-style: italic;
            color: #555;
        }

        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            max-width: 100%;
            border-radius: 0.75rem;
        }

        .video-wrapper iframe,
        .video-wrapper video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 0.75rem;
        }

        .tech-icons li {
            list-style: none;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
            color: #444;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .tech-icons li svg {
            fill: currentColor;
        }

        .card-outer {
            border: 1px solid #ddd;
            border-radius: 1rem;
            background: #f9fcfc;
            padding: 0.75rem;
            overflow-x: auto;
        }

        .mb-badge {
            margin-right: 0.5rem;
            margin-bottom: 0.4rem;
        }

        /* Product Logo Styling */
        .product-logo-container {
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            background: #f8f9fa;
            border-radius: 12px;
            border: 2px solid #e9ecef;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .product-logo {
            max-width: 45px;
            max-height: 45px;
            width: auto;
            height: auto;
            object-fit: contain;
        }

        /* Project Links Styling */
        .project-links {
            padding: 0;
        }

        .link-item {
            transition: all 0.3s ease;
            padding: 0;
            border-radius: 8px;
            margin-bottom: 6px !important;
        }

        .link-item a {
            font-weight: 500;
            font-size: 0.9rem;
        }

        /* Responsive adjustments */
        @media (min-width: 768px) {
            .product-logo-container {
                width: 70px;
                height: 70px;
            }

            .product-logo {
                max-width: 55px;
                max-height: 55px;
            }

            .team-member .icon-circle {
                height: 40px;
                width: 40px;
                font-size: 1.1rem;
            }

            .team-member .name {
                font-size: 1rem;
            }

            .link-item a {
                font-size: 1rem;
            }
        }

        @media (min-width: 992px) {
            .product-logo-container {
                width: 80px;
                height: 80px;
            }

            .product-logo {
                max-width: 60px;
                max-height: 60px;
            }
        }

        @media (max-width: 767px) {
            .img-card,
            .card-outer {
                padding: 0.5rem;
            }

            h1 {
                font-size: 1.5rem;
            }

            .section-title {
                font-size: 1.2rem;
                margin-top: 2rem;
                margin-bottom: 1rem;
            }
        }
    </style>
@endsection

@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var toastElList = [].slice.call(document.querySelectorAll('.toast'))
            var toastList = toastElList.map(function(toastEl) {
                return new bootstrap.Toast(toastEl, {
                    delay: 4000
                });
            });
            toastList.forEach(toast => toast.show());
        });
    </script>
@endsection
