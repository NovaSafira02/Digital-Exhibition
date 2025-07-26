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
    <div class="container">

        <div class=" mb-4">
            <div class="d-flex flex-wrap justify-content-center align-items-center gap-4 p-3 position-relative">
                @if ($project->is_best == 1)
                    <img src="{{ asset('img/label-card.png') }}"
                        alt="Best Project Label"
                        class="position-absolute top-0 end-0 m-3"
                        style="width: 260px; z-index: 10;">
                @endif
                <img src="{{ asset('storage/' . $project->thumbnail) }}" class="img-fluid img-card"
                    alt="Laptop screen depicting HidroTani online community forum page for hydroponic users" />
            </div>

            <!-- Video + Technologies + Links row -->
            <div class="row gx-4">
                <div class="col-lg-8">
                    <div class="video-wrapper shadow rounded-3 mb-5">
                        <iframe src="{{ $project->link_video }}" title="HidroTani Project Overview" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; fullscreen"
                            allowfullscreen></iframe>
                    </div>
                    <!-- Title and badges -->
                    <div class="d-flex align-items-center mb-3">
                        <div class="product-logo-container me-3">
                            <img src="{{ asset('storage/' . $project->logo) }}" alt="{{ $project->nama_product }} Logo" class="product-logo">
                            {{-- <img src="{{ asset('img/icons/edit-pass-icon.svg') }}" alt="Edit" width="32" height="32"> --}}
                        </div>
                        <h1 class="fw-bold mb-0">{{ $project->nama_product }}</h1>
                    </div>
                    <div class="mt-4 mb-3 d-flex flex-wrap gap-3 badge-group">
                        <span class="badge badge-purple p-2">by {{ $project->nama_group }}</span>
                        <span class="badge badge-pink p-2">{{ $project->Kategori->nama }}</span>
                        <span class="badge badge-blue-outline p-2">Batch {{ $project->Kategori->batch }}</span>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="rounded-container shadow-sm p-3 mb-4">
                        <h5 class="mb-3">Teknologi Yang Digunakan</h5>
                        <div class="row tech-container">
                            @php
                                $techCount = count($project->Teches);
                                $techesPerColumn = 3;
                                $columnCount = ceil($techCount / $techesPerColumn);
                                $techIndex = 0;
                            @endphp

                            @for ($col = 0; $col < $columnCount; $col++)
                                <div class="col-md-{{ 12 / min($columnCount, 3) }} mb-2">
                                    <ul class="tech-icons ps-0">
                                        @for ($i = 0; $i < $techesPerColumn && $techIndex < $techCount; $i++)
                                            @php $tech = $project->Teches[$techIndex++]; @endphp
                                            <li class="d-flex align-items-center mb-2">
                                                <img src="{{ asset('storage/public/icons/' . $tech->icon) }}" alt="{{ $tech->nama }}"
                                                    class="me-2" width="24" height="24">
                                                <span>{{ $tech->nama }}</span>
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="rounded-container shadow-sm p-3 mb-4">
                        <h5 class="mb-3">Link Proyek</h5>
                        <div class="project-links">
                                <!-- Link Aplikasi Mobile -->
                                @if($project->link_video)
                                <div class="col-6">
                                    <div class="link-item d-flex align-items-center">
                                        <div class="me-3">
                                            <img src="{{ asset('img/icons/android.svg') }}" alt="Android" width="24" height="24">
                                        </div>
                                        <a href="{{ $project->link_video }}" class="link-blue text-decoration-none" target="_blank" rel="noopener">Download Aplikasi
                                        </a>
                                    </div>
                                </div>
                                @endif

                                <!-- Link Prototype Figma -->
                                @if($project->link_figma)
                                <div class="col-6">
                                    <div class="link-item d-flex align-items-center">
                                        <div class="me-3">
                                            <img src="{{ asset('img/icons/figma.svg') }}" alt="Prototype" width="24" height="24">
                                        </div>
                                        <a href="{{ $project->link_figma }}" class="link-blue text-decoration-none" target="_blank" rel="noopener">
                                            Link Prototype
                                        </a>
                                    </div>
                                </div>
                                @endif

                            <!-- Baris kedua: Link Website -->
                            @if($project->link_website)
                            <div class="link-item d-flex align-items-center">
                                <div class="me-3">
                                    <img src="{{ asset('img/icons/website.svg') }}" alt="Web" width="24" height="24">
                                </div>
                                <a href="{{ $project->link_website }}" class="link-blue text-decoration-none" target="_blank" rel="noopener">
                                    Link Website
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="rounded-container shadow-sm p-3">
                        <h5 class="mb-3">Tertarik Dengan Proyek Ini?</h5>
                        <div class="link-item d-flex align-items-center">
                            <div class="me-3">
                                <img src="{{ asset('img/icons/mail.png') }}" alt="Prototype" width="24" height="24">
                            </div>
                            <a href="mailto:info@infinitelearning.id" class="link-blue text-decoration-none" target="_blank" rel="noopener">
                                info@infinitelearning.id
                            </a>
                        </div>
                        <div class="link-item d-flex align-items-center">
                            <div class="me-3">
                                <img src="{{ asset('img/icons/linkedin.svg') }}" alt="Prototype" width="24" height="24">
                            </div>
                            <a href="https://www.linkedin.com/company/infinite-learning-indonesia" class="link-blue text-decoration-none" target="_blank" rel="noopener">
                                Infinite Learning Indonesia
                            </a>
                        </div>
                        <button class="btn text-white fw-bold w-100 p-2" style="background-color: #8A3DFF;"
                            data-bs-toggle="modal" data-bs-target="#modalSetujui">Hubungi
                            Admin</button>
                    </div>
                </div>
            </div>



            <!-- Project description -->
            <section>
                <h3 class="section-title">Deskripsi Project</h3>
                <p class="text-justify fs-1">{!! $project->deskripsi !!}</p>
            </section>


            <!-- Mentor Group -->
            <section>
                <h3 class="section-title">Mentor Group</h3>
                <div class ="row g-4 fs-5">
                    @foreach ($project->MentorGroup as $mentorGroup)
                        @php
                            $mentorUsername = optional($mentorGroup->MentorProject->Mentor)->username;
                        @endphp

                        @if ($mentorUsername)
                            <div class="col-6 col-md-4 col-lg-3 team-member d-flex">
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
                    <h3 class="section-title">Tim {{ $group }}</h3>
                    <div class="row g-4">
                        @foreach ($members as $member)
                            <div class="col-6 col-md-4 col-lg-3 team-member d-flex">
                                <div class="icon-circle" aria-label="User Icon">
                                    {{ strtoupper(substr($member->nama, 0, 1)) }}
                                </div>
                                <div>
                                    <div class="name">{{ $member->nama }}</div>
                                    <div class="role">{{ $member->MemberMaster->role }}</div>
                                    <a href="{{ $member->linkedIn }}"
                                        class="linkedin-link d-inline-flex align-items-center" target="_blank"
                                        rel="noopener">
                                        <svg viewBox="0 0 24 24">
                                            <path
                                                d="M19 0h-14c-2.76 0-5 2.24-5 5v14c0 2.76 2.24 5 5 5h14c2.76 0 5-2.24 5-5v-14c0-2.76-2.24-5-5-5zm-11 20h-3v-12h3v12zm-1.5-13.4c-1 0-1.8-.8-1.8-1.8s.8-1.8 1.8-1.8c1 0 1.8.8 1.8 1.8s-.8 1.8-1.8 1.8zm13.5 13.4h-3v-5.6c0-1.3-.5-2.2-1.7-2.2s-2 1-2 2.1v5.7h-3v-12h3v1.6h.1c.5-.9 1.7-1.8 3.5-1.8 3.7 0 4.3 2.5 4.3 5.7v6.5z" />
                                        </svg><img src="{{ asset('img/logo-linkind.png') }}" class="me-2"
                                            style="width: 1rem; height: 1rem;">
                                        LinkedIn
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            @endforeach
        </div>

        <div class="modal fade" id="modalSetujui" tabindex="-1" aria-labelledby="modalSetujuiLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content p-3" style="border-radius: 32px">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold" id="diskusiModalLabel">Hubungi Admin untuk Diskusi Lebih Lanjut</h5>

                    </div>
                    <form action="{{ route('pesan.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <p>Anda dapat mengisi bagian ini jika tertarik untuk mengetahui lebih lanjut atau ingin
                                mendiskusikan produk ini lebih jauh.</p>

                            <div class="fx-bold">
                                <div class="form-group mb-3">
                                    <label for="type_pesan">Apa Topik Yang Ingin Anda Diskusikan?</label>
                                    <select class="form-select" name="type_pesan" id="type_pesan" required>
                                        <option value="">Pilih opsi diskusi</option>
                                        <option value="Saya tertarik untuk merekrut anggota tim">Saya tertarik untuk
                                            merekrut
                                            anggota tim</option>
                                        <option value="Saya ingin berinvestasi">Saya ingin berinvestasi</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="nama_investor">Nama</label>
                                    <input type="text" class="form-control" name="nama_investor" id="nama_investor"
                                        placeholder="Masukkan nama anda" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="instansi">Nama Industri</label>
                                    <input type="text" class="form-control" name="instansi" id="instansi"
                                        placeholder="Masukkan nama industri" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="email">Email/No.Telepon</label>
                                    <input type="text" class="form-control" name="email" id="email"
                                        placeholder="Masukkan email/No. Telepon" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="alamat_instansi">Alamat Perusahaan</label>
                                    <input type="text" class="form-control" name="alamat_instansi"
                                        id="alamat_instansi" placeholder="Masukkan alamat perusahaan" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="pesan">Pesan</label>
                                    <textarea class="form-control textarea-vertical-center" name="pesan" id="pesan" rows="3"
                                        placeholder="Tuliskan pesan" required></textarea>
                                </div>

                            </div>

                            <h6 class="modal-title fw-bold">Apakah Kamu Yakin Ingin Mengirim Pesan Ini?</h6>
                            <p>Pesan ini akan dikirimkan kepada admin. Anda akan dihubungi melalui informasi kontak yang
                                telah Anda berikan. Pastikan semua informasi yang dimasukkan sudah benar dan akurat.</p>
                            <div class="form-group mb-3 form-check">

                                <input type="checkbox" class="form-check-input" id="confirm" required>
                                <label class="form-check-label" for="confirm">Ya, data sudah benar</label>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-custom-cancel rounded"
                                data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-custom rounded">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
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

        .textarea-vertical-center {
            align-items: center;
            /* Vertikal tengah */
            text-align: left;
            /* Teks tetap rata kiri */
            padding-top: 3.5rem;
        }


        .navbar-custom {
            background-color: white;
        }

        .nav-link {
            color: black !important;
            font-weight: normal;
            margin: 1rem;
        }

        .nav-link.active {
            color: #fff !important;
            background-color: #8a3dff !important;
            padding: 0.4rem 2rem;
            border-radius: 12px;
            /* membuat tampilan badge/pill */
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
            padding: 0.7rem 2rem;
            border-radius: 999px;
            font-weight: 500;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-custom-cancel {
            background-color: rgba(92, 92, 92, 0.2);
            color: #5C5C5C;
            padding: 0.7rem 2rem;
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
            padding: 12px 20px;
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
            border-radius: 1.5rem;
            background: #fff;
            padding: 1rem;
            border: 1px solid #ddd;
        }

        .img-card {
            border-radius: 1rem;
            border: 1px solid #ccc;
            background: #f7f9fa;
            padding: 1rem;
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
            font-size: 0.8rem;
            font-weight: 600;
        }

        .badge-purple {
            background-color: #8A3DFF;
            color: #F4F3F9;
            font-size: 0.7;
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
            margin-top: 3rem;
            margin-bottom: 1.5rem;
            color: #222;
        }

        .link-blue {
            color: #1565c0;
            text-decoration: underline;
        }

        .person-icon {
            font-size: 1.3rem;
            vertical-align: middle;
            margin-right: 0.3rem;
            color: #444;
        }

        .team-member .icon-circle {
            background-color: #7a4dff;
            color: white;
            border-radius: 50%;
            height: 40px;
            width: 40px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            font-weight: 700;
            font-size: 1.1rem;
            margin-right: 0.8rem;
        }

        .team-member .name {
            font-weight: 600;
        }

        .team-member .role {
            font-size: 0.85rem;
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
            border-radius: 1rem;
        }

        .video-wrapper iframe,
        .video-wrapper video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 1rem;
        }

        .tech-icons li {
            list-style: none;
            margin-bottom: 0.6rem;
            font-size: 1rem;
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
            border-radius: 1.5rem;
            background: #f9fcfc;
            padding: 1rem;
            overflow-x: auto;
        }

        .mb-badge {
            margin-right: 0.6rem;
            margin-bottom: 0.5rem;
        }

                /* Product Logo Styling */
        .product-logo-container {
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 80px;
            height: 80px;
            background: #f8f9fa;
            border-radius: 16px;
            border: 2px solid #e9ecef;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .product-logo {
            max-width: 60px;
            max-height: 60px;
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
            padding: 8px 12px;
            border-radius: 8px;
            margin-bottom: 8px !important;
        }

        .link-item a {
            font-weight: 500;

            font-size: 14px;
        }



        /* Responsive adjustments */
        @media (max-width: 767px) {
            .product-logo-container {
                width: 60px;
                height: 60px;
            }

            .product-logo {
                max-width: 45px;
                max-height: 45px;
            }
        }

        @media (max-width: 767px) {

            .img-card,
            .card-outer {
                padding: 0.5rem;
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
