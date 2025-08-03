@extends('dashboard.partials.main')
@section('content')
    <div class="card">
        <div class="row">
            <div class="col-sm-6 col-md">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @elseif (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Tampilkan error validasi secara umum -->
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <h6 class="alert-heading">Terdapat kesalahan pada form:</h6>
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" id="projectForm">
                @csrf
                <!-- Informasi -->
                <h5 class="mb-3 fw-bold">Informasi Proyek</h5>
                <p class="mb-3">Bagian ini berisi informasi seputar detail grup, mulai dari nama group, sesi kelas,
                    hingga
                    mentor group dari <strong>Project Massive Challenge</strong>.</p>
                <div class="row gy-3 align-items-center mb-3">
                    <div class="col-lg-5">
                        <label for="namaGroup" class="form-label fw-semibold">Nama Group</label>
                        <div class="mb-1" style="font-size: 12px">Gunakan format Title Case ya, contohnya seperti ini:
                            Infinite Learning.
                        </div>
                        <input type="text" id="namaGroup" class="form-control @error('nama_group') is-invalid @enderror" 
                            placeholder="Masukkan nama group" name="nama_group" value="{{ old('nama_group') }}" />
                        @error('nama_group')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-3">
                        <label for="sesiKelas" class="form-label fw-semibold">Sesi/Kelas</label>
                        <br class="small mb-2"></br>
                        <select id="sesiKelas" class="form-select @error('sesi_kelas') is-invalid @enderror" 
                            name="sesi_kelas">
                            <option disabled {{ old('sesi_kelas') ? '' : 'selected' }}>Pilih Sesi/Kelas</option>
                            <option value="Pagi" {{ old('sesi_kelas') == 'Pagi' ? 'selected' : '' }}>Pagi</option>
                            <option value="Siang" {{ old('sesi_kelas') == 'Siang' ? 'selected' : '' }}>Siang</option>
                            <option value="Malam" {{ old('sesi_kelas') == 'Malam' ? 'selected' : '' }}>Malam</option>
                        </select>
                        @error('sesi_kelas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-4">
                        <label for="mentorGroupSelect" class="form-label fw-semibold">Mentor Group</label>
                        <br class="small mb-2">
                        </br>
                        <select id="mentorGroupSelect" class="form-select @error('mentorId') is-invalid @enderror" name="mentorId[]" multiple>
                            <option disabled>Pilih Mentor</option>
                            @foreach ($mentors as $mentor)
                                <option value="{{ $mentor->id }}" {{ in_array($mentor->id, old('mentorId', [])) ? 'selected' : '' }}>
                                    {{ $mentor->Mentor->username }}
                                </option>
                            @endforeach
                        </select>
                        @error('mentorId')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Anggota Group -->
                <div class="mb-4">
                    <h5 class="fw-bold">Anggota Group</h5>
                    <p class="mb-3">Bagian ini berisi informasi seputar keanggotaan group, siapa saja yang terlibat dalam
                        mengerjakan <strong>Project Massive Challenge.</strong></p>

                    <!-- Tim Web, Mobile, dll -->
                    @foreach ($memberGroups as $groupName => $members)
                        <fieldset class="mb-4">
                            <h6 class="fw-bold">Tim {{ $groupName }}</h6>
                            <small class="text-muted d-block mb-1">Form untuk anggota group {{ $groupName }}</small>

                            <div class="repeater" data-group="{{ $groupName }}">
                                @if(old('nama.'.$groupName))
                                    @foreach(old('nama.'.$groupName) as $index => $nama)
                                        <div class="row align-items-center gy-3 repeater-item mb-2">
                                            <div class="col-md-4">
                                                <label class="fw-semibold">Nama Anggota</label>
                                                <input type="text" name="nama[{{ $groupName }}][]" class="form-control mt-1 @error('nama.'.$groupName.'.'.$index) is-invalid @enderror"
                                                    placeholder="Nama anggota group {{ $groupName }}" value="{{ $nama }}" />
                                                @error('nama.'.$groupName.'.'.$index)
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label class="fw-semibold">LinkedIn</label>
                                                <input type="url" name="linkedIn[{{ $groupName }}][]" class="form-control @error('linkedIn.'.$groupName.'.'.$index) is-invalid @enderror"
                                                    placeholder="Masukkan link LinkedIn" value="{{ old('linkedIn.'.$groupName.'.'.$index) }}" />
                                                @error('linkedIn.'.$groupName.'.'.$index)
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-2">
                                                <label class="fw-semibold d-flex justify-content-between align-items-center">
                                                    Role
                                                </label>
                                                <select name="roleId[{{ $groupName }}][]" class="form-select @error('roleId.'.$groupName.'.'.$index) is-invalid @enderror">
                                                    <option disabled {{ old('roleId.'.$groupName.'.'.$index) ? '' : 'selected' }}>Pilih Role</option>
                                                    @foreach ($members as $member)
                                                        <option value="{{ $member->id }}" {{ old('roleId.'.$groupName.'.'.$index) == $member->id ? 'selected' : '' }}>
                                                            {{ ucwords(str_replace('_', ' ', $member->role)) }}</option>
                                                    @endforeach
                                                </select>
                                                @error('roleId.'.$groupName.'.'.$index)
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-2 pt-5">
                                                <span class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-success add-row">+</button>
                                                    <button type="button" class="btn btn-sm btn-danger remove-row">−</button>
                                                </span>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="row align-items-center gy-3 repeater-item mb-2">
                                        <div class="col-md-4">
                                            <label class="fw-semibold">Nama Anggota</label>
                                            <input type="text" name="nama[{{ $groupName }}][]" class="form-control mt-1"
                                                placeholder="Nama anggota group {{ $groupName }}" required />
                                        </div>
                                        <div class="col-md-4">
                                            <label class="fw-semibold">LinkedIn</label>
                                            <input type="url" name="linkedIn[{{ $groupName }}][]" class="form-control"
                                                placeholder="Masukkan link LinkedIn" required />
                                        </div>
                                        <div class="col-md-2">
                                            <label class="fw-semibold d-flex justify-content-between align-items-center">
                                                Role
                                            </label>
                                            <select name="roleId[{{ $groupName }}][]" class="form-select" required>
                                                <option selected disabled>Pilih Role</option>
                                                @foreach ($members as $member)
                                                    <option value="{{ $member->id }}">
                                                        {{ ucwords(str_replace('_', ' ', $member->role)) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2 pt-5">
                                            <span class="btn-group">
                                                <button type="button" class="btn btn-sm btn-success add-row">+</button>
                                                <button type="button" class="btn btn-sm btn-danger remove-row">−</button>
                                            </span>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </fieldset>
                    @endforeach
                </div>

                <!-- Product Information -->
                <div class="mb-4">
                    <h5 class="fw-bold">Informasi Produk</h5>
                    <p class="mb-3">Bagian ini berisi informasi seputar detail produk/proyek yang sudah dikembangkan pada
                        <strong>Massive Challenge</strong> di Infinite Learning Indonesia.
                    </p>

                    <div class="mb-3">
                        <h6>Logo Produk</h6>
                        <small class="text-muted d-block mb-1">
                            Logo Produk wajib menggunakan gambar berformat <b>*.PNG, *.JPG, atau *.SVG</b> dan ukuran file &lt; 2 MB.
                            Disarankan menggunakan logo dengan background transparan untuk hasil terbaik.
                        </small>
                        <label for="logoProduct" class="file-drop-zone @error('logo') is-invalid @enderror" tabindex="0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-image mt-2" viewBox="0 0 24 24">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <polyline points="21,15 16,10 5,21"></polyline>
                            </svg>
                            <span id="logoFileName">upload logo produk</span><br />
                            <button type="button" class="btn btn-dark btn-sm mt-1">Pilih Logo</button>
                            <input type="file" id="logoProduct" class="d-none" accept="image/*"
                                aria-label="Upload Logo Product" name="logo" />
                        </label>
                        @error('logo')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        <div id="logoProduct-error" class="text-danger mt-1 small"></div>
                    </div>

                    <div class="mb-3">
                        <h6 for="productName">Nama Produk</h6>
                        <small class="text-muted d-block mb-1">Gunakan format <strong>Title Case</strong> ya, contohnya
                            seperti
                            ini: Ayo Bercocok Tanam.</small>
                        <input type="text" id="productName" class="form-control @error('nama_product') is-invalid @enderror" 
                            placeholder="Masukkan Nama Produk" name="nama_product" value="{{ old('nama_product') }}" />
                        @error('nama_product')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <h6 for="descriptionProduct">Deskripsi Produk</h6>
                        <small class="text-muted d-block mb-1">Kolom ini mendukung Rich Text Formatting. Usahakan
                            deskripsinya yang
                            padat dan berisi, ceritakan dampaknya kepada pengguna dan kamu bisa meng-highlight hal-hal yang
                            kamu
                            ingin tekankan kepada pembaca.</small>
                        <textarea id="descriptionProduct" class="form-control @error('deskripsi') is-invalid @enderror" 
                            placeholder="Deskripsikan produk tim kammu" name="deskripsi">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <h6 for="techSelect">Teknologi Yang Digunakan</h6>
                        <small class="text-muted d-block mb-1">Pilih lebih dari satu teknologi yang digunakan dalam produk
                            ini.</small>
                        <select name="tech_ids[]" id="techSelect" class="form-select @error('tech_ids') is-invalid @enderror" multiple>
                            @foreach ($teches as $tech)
                                <option value="{{ $tech->id }}" {{ in_array($tech->id, old('tech_ids', [])) ? 'selected' : '' }}>
                                    {{ $tech->nama }}
                                </option>
                            @endforeach
                        </select>
                        @error('tech_ids')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <h6>Thumbnail Produk</h6>
                        <small class="text-muted d-block mb-1">
                            Thumbnail Produk wajib menggunakan gambar berformat <b>*.JPEG</b> dan ukuran file &lt; 5 MB
                            dan
                            untuk ukurannya yaitu ukuran untuk desktop 16:9 atau 1280 × 720.</small>
                        <label for="thumbnailProduct" class="file-drop-zone @error('thumbnail') is-invalid @enderror" tabindex="0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-image mt-2" viewBox="0 0 24 24">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <polyline points="21,15 16,10 5,21"></polyline>
                            </svg>
                            <span id="thumbnailFileName">upload file thumbnail</span><br />
                            <button type="button" class="btn btn-dark btn-sm mt-1">Pilih File</button>
                            <input type="file" id="thumbnailProduct" class="d-none" accept="image/*"
                                aria-label="Upload Thumbnail Product" name="thumbnail" />
                        </label>
                        @error('thumbnail')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        <div id="thumbnailProduct-error" class="text-danger mt-1 small"></div>
                    </div>

                    <div class="mb-3">
                        <h6 for="videoShowcase">Link Video Showcase</h6>
                        <small class="text-muted d-block mb-1">Silahkan upload terlebih dahulu videonya ke platform
                            <strong>Youtube</strong> dengan <strong>visibilitas Not Public</strong> atau <strong>Tidak
                                Publik</strong>.</small>
                        <input type="url" id="videoShowcase" class="form-control @error('link_video') is-invalid @enderror" 
                            placeholder="Masukkan link video" name="link_video" value="{{ old('link_video') }}" />
                        @error('link_video')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <h6 for="linkFigma">Link Preview Android/Prototype</h6>
                        <small class="text-muted d-block mb-1">Masukkan link apk Android. Jika aplikasi kamu belum di publish ke Playstore, Alternatif lain kamu bisa meletakkan aplikasi kamu ke drive, masukkan link drive file apk, atau bisa menggunakan platform seperti
                            <strong>Appetize.io</strong> atau platform lain sejenisnya. Jika tidak memungkinkan juga, Kamu bisa menggunakan link prototype Android.</small>
                        <input type="url" id="linkFigma" class="form-control @error('link_figma') is-invalid @enderror" 
                            placeholder="Masukkan link preview Android" name="link_figma" value="{{ old('link_figma') }}" />
                        @error('link_figma')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <h6 for="linkGithub">Link Preview Website/Prototype</h6>
                        <small class="text-muted d-block mb-1">Jika website kamu belum menggunakan hosting yang berbayar atau
                            mempunyai nama domain resmi, Alternatif lain kamu bisa menggunakan platform seperti <strong>Vercel</strong> atau
                            <strong>Netlify</strong> atau platform lain sejenisnya. Jika tidak memungkinkan juga, Kamu bisa menggunakan link prototype Website.</small>
                        <input type="url" id="linkGithub" class="form-control @error('link_website') is-invalid @enderror" 
                            placeholder="Masukkan link preview website" name="link_website" value="{{ old('link_website') }}" />
                        @error('link_website')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Terms and Conditions -->
                <fieldset class="border rounded p-3 mb-4">
                    <h5 class="fw-bold mb-2 text-danger">Terms and Conditions<span class="text-danger">*</span>
                    </h5>
                    <p class="small mb-3">
                        Produk yang teman-teman kembangkan sepenuhnya hak milik teman-teman dan tim. Infinite Learning
                        Indonesia
                        diberikan izin untuk mempromosikan produk dan menunjukkan produk sebagai hasil karya ketika
                        teman-teman
                        belajar di Infinite Learning Indonesia.
                        Infinite Learning Indonesia juga diberikan izin untuk menghubungi teman-teman kembali, jika ada
                        informasi
                        lebih lanjut mengenai produk yang sudah teman-teman kembangkan selama belajar disini.
                    </p>
                    <div class="form-check">
                        <input class="form-check-input @error('agree') is-invalid @enderror" type="checkbox" id="agreeCheck" name="agree" required />
                        <label class="form-check-label" for="agreeCheck">Ya, data sudah benar</label>
                        @error('agree')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </fieldset>

                <!-- Buttons -->
                <div class="d-flex justify-content-end gap-2">
                    <button type="submit" class="btn btn-primary" style="background: #8A3DFF">Kirim</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script>
        // Script untuk repeater (anggota tim)
        $(document).ready(function() {
            $('.repeater').each(function() {
                let repeater = $(this);
                let groupName = repeater.data('group');

                repeater.on('click', '.add-row', function() {
                    let firstRow = repeater.find('.repeater-item').first();
                    let clone = firstRow.clone();

                    // Reset nilai input pada clone
                    clone.find('input').val('');
                    clone.find('select').val('');
                    
                    // Hapus kelas validasi dan pesan error
                    clone.find('.is-invalid').removeClass('is-invalid');
                    clone.find('.invalid-feedback').remove();
                    
                    repeater.append(clone);
                });

                repeater.on('click', '.remove-row', function() {
                    let rows = repeater.find('.repeater-item');
                    if (rows.length > 1) {
                        $(this).closest('.repeater-item').remove();
                    } else {
                        alert('Minimal satu anggota harus ada.');
                    }
                });
            });
        });

        // Inisialisasi Summernote untuk editor deskripsi
        $(document).ready(function() {
            $('#descriptionProduct').summernote({
                height: 400,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['para', ['ul', 'ol', ]],
                    ['insert', ['link']]
                ],
                callbacks: {
                    onInit: function() {
                        // Set nilai dari old input jika ada
                        const oldValue = `{!! old('deskripsi') !!}`;
                        if (oldValue) {
                            $('#descriptionProduct').summernote('code', oldValue);
                        }
                    }
                }
            });
        });

        // Inisialisasi Choices.js untuk select multiple
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi Choices.js untuk mentorGroupSelect
            const mentorGroupSelect = document.getElementById('mentorGroupSelect');
            if (mentorGroupSelect) {
                new Choices(mentorGroupSelect, {
                    removeItemButton: true,
                    shouldSort: false,
                    placeholder: false,
                });
            }

            // Inisialisasi Choices.js untuk techSelect
            const techSelect = document.getElementById('techSelect');
            if (techSelect) {
                new Choices(techSelect, {
                    removeItemButton: true,
                    shouldSort: false,
                    placeholder: false,
                });
            }
        });

        // Fungsi untuk menangani tampilan nama file saat file dipilih
        function setupFileDisplay(inputId, fileNameId) {
            const fileInput = document.getElementById(inputId);
            if (fileInput) {
                fileInput.addEventListener('change', function() {
                    if (this.files.length > 0) {
                        document.getElementById(fileNameId).textContent = this.files[0].name;
                    }
                });
            }
        }

        // Setup tampilan nama file
        setupFileDisplay('logoProduct', 'logoFileName');
        setupFileDisplay('thumbnailProduct', 'thumbnailFileName');

        // Fungsi untuk validasi file upload
        function handleFileInput(inputId, maxSizeMB, allowedFormats) {
            const fileInput = document.getElementById(inputId);
            const errorDiv = document.getElementById(`${inputId}-error`);
            
            if (fileInput) {
                fileInput.addEventListener('change', function() {
                    errorDiv.textContent = '';
                    
                    if (this.files.length > 0) {
                        const file = this.files[0];
                        const fileSize = file.size / (1024 * 1024); // Convert to MB
                        const fileExtension = file.name.split('.').pop().toLowerCase();
                        
                        // Validasi ukuran file
                        if (fileSize > maxSizeMB) {
                            errorDiv.textContent = `Ukuran file terlalu besar (${fileSize.toFixed(2)}MB). Maksimal ${maxSizeMB}MB.`;
                            this.value = ''; // Reset file input
                            document.getElementById(inputId === 'logoProduct' ? 'logoFileName' : 'thumbnailFileName').textContent = 
                                `upload file ${inputId === 'logoProduct' ? 'logo' : 'thumbnail'}`;
                            return;
                        }
                        
                        // Validasi format file
                        if (allowedFormats && !allowedFormats.includes(fileExtension)) {
                            errorDiv.textContent = `Format file tidak didukung. Gunakan format: ${allowedFormats.join(', ')}`;
                            this.value = ''; // Reset file input
                            document.getElementById(inputId === 'logoProduct' ? 'logoFileName' : 'thumbnailFileName').textContent = 
                                `upload file ${inputId === 'logoProduct' ? 'logo' : 'thumbnail'}`;
                            return;
                        }
                    }
                });
            }
        }

        // Inisialisasi validasi file
        handleFileInput('logoProduct', 7, ['png', 'jpg', 'jpeg', 'svg']);
        handleFileInput('thumbnailProduct', 7, ['jpeg', 'jpg']);

        // Validasi form sebelum submit
        document.getElementById('projectForm').addEventListener('submit', function(e) {
            let hasError = false;
            
            // Validasi file logo
            const logoInput = document.getElementById('logoProduct');
            if (!logoInput.files || logoInput.files.length === 0) {
                document.getElementById('logoProduct-error').textContent = 'Logo produk harus diupload';
                hasError = true;
            }
            
            // Validasi file thumbnail
            const thumbnailInput = document.getElementById('thumbnailProduct');
            if (!thumbnailInput.files || thumbnailInput.files.length === 0) {
                document.getElementById('thumbnailProduct-error').textContent = 'Thumbnail produk harus diupload';
                hasError = true;
            }
            
            // Validasi teknologi
            const techSelect = document.getElementById('techSelect');
            if (techSelect.selectedOptions.length === 0) {
                document.querySelector('.choices__inner').classList.add('is-invalid');
                hasError = true;
            }
            
            if (hasError) {
                e.preventDefault();
                window.scrollTo(0, 0);
            }
        });
    </script>
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <style>
        /* Custom style for dashed upload area */
        .file-drop-zone {
            border: 2px dashed #6c757d;
            border-radius: 6px;
            background: #f8f9fa;
            min-height: 110px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 0.2rem;
            color: #6c757d;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .file-drop-zone:hover {
            background-color: #e9ecef;
        }

        .file-drop-zone.is-invalid {
            border-color: #dc3545;
        }

        .file-drop-zone svg {
            width: 30px;
            height: 30px;
            color: #6c757d;
        }

        .btn-disabled {
            pointer-events: none;
            opacity: 0.65;
        }

        small.text-muted {
            user-select: none;
        }

        /* Perbaikan tampilan untuk choices.js */
        .choices__inner {
            padding: 0.375rem 0.75rem;
            border-radius: 0.25rem;
            border: 1px solid #ced4da;
        }

        .choices__inner.is-invalid {
            border-color: #dc3545;
        }

        .choices__input {
            background-color: transparent;
        }

        .choices__list--multiple .choices__item {
            background-color: #8A3DFF;
            border: 1px solid #8A3DFF;
        }

        /* Perbaikan tampilan untuk form secara umum */
        .form-label {
            margin-bottom: 0.25rem;
        }

        .invalid-feedback {
            display: block;
        }

        /* Perbaikan tampilan untuk repeater */
        .repeater-item {
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            background-color: #f9f9f9;
        }

        /* Perbaikan tampilan untuk alert */
        .alert {
            margin-bottom: 1.5rem;
        }

        .alert-heading {
            margin-bottom: 0.5rem;
        }
    </style>
@endsection
