@extends('dashboard.partials.main')

@section('content')
<div class="row p-2">
    <div class="col-12">
        <div class="card">
            <div class="card-header pb-0">
                <h6>Pengaturan Admin</h6>
            </div>
            <div class="card-body">
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

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h6>Ubah Password</h6>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.updatePassword') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    
                                    <div class="mb-3">
                                        <label for="current_password" class="form-label">Password Saat Ini</label>
                                        <input type="password" class="form-control" id="current_password" name="current_password" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="new_password" class="form-label">Password Baru</label>
                                        <input type="password" class="form-control" id="new_password" name="new_password" required minlength="6">
                                        <small class="form-text text-muted">Minimal 6 karakter</small>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="new_password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                                        <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" required minlength="6">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary" style="background: #8A3DFF">
                                        <i class="fas fa-save me-2"></i>Simpan Perubahan
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h6>Informasi Akun</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" value="{{ auth()->user()->email }}" readonly>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Role</label>
                                    <input type="text" class="form-control" value="Admin" readonly>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Terakhir Login</label>
                                    <input type="text" class="form-control" value="{{ auth()->user()->updated_at->format('d M Y H:i') }}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
