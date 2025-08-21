<?php

namespace App\Http\Controllers; // Mendefinisikan namespace untuk controller

// Import class-class yang dibutuhkan
use Illuminate\Http\Request; // Untuk menangani request HTTP
use Illuminate\Support\Facades\Auth; // Untuk autentikasi user
use Illuminate\Support\Facades\Hash; // Untuk hashing password
use Illuminate\Support\Facades\Validator; // Untuk validasi input

class AdminController extends Controller // Mendefinisikan class AdminController yang mewarisi class Controller
{
    /**
     * Tampilkan halaman pengaturan admin
     */
    public function settings() // Method untuk menampilkan halaman pengaturan admin
    {
        $pages = "Pengaturan Admin"; // Mendefinisikan variabel $pages untuk judul halaman
        return view('dashboard.pages.admin-settings', compact('pages')); // Mengembalikan view dengan data $pages
    }

    /**
     * Update password admin
     */
    public function updatePassword(Request $request) // Method untuk mengupdate password admin dengan parameter request
    {
        $validator = Validator::make($request->all(), [ // Membuat validator untuk memvalidasi input
            'current_password' => 'required', // Validasi password saat ini harus diisi
            'new_password' => 'required|min:6|confirmed', // Validasi password baru harus diisi, minimal 6 karakter, dan dikonfirmasi
        ], [
            'current_password.required' => 'Password saat ini harus diisi', // Pesan error jika password saat ini kosong
            'new_password.required' => 'Password baru harus diisi', // Pesan error jika password baru kosong
            'new_password.min' => 'Password baru minimal 6 karakter', // Pesan error jika password baru kurang dari 6 karakter
            'new_password.confirmed' => 'Konfirmasi password tidak cocok', // Pesan error jika konfirmasi password tidak cocok
        ]);

        if ($validator->fails()) { // Cek apakah validasi gagal
            return back()->withErrors($validator)->withInput(); // Kembali ke halaman sebelumnya dengan error dan input
        }

        $user = Auth::user(); // Mendapatkan user yang sedang login

        // Cek password saat ini
        if (!Hash::check($request->current_password, $user->password)) { // Verifikasi password saat ini
            return back()->with('error', 'Password saat ini tidak benar.'); // Kembali dengan pesan error jika password salah
        }

        // Update password
        $user->password = Hash::make($request->new_password); // Mengubah password user dengan password baru yang di-hash
        $user->update(); // Menyimpan perubahan ke database

        return back()->with('success', 'Password berhasil diubah.'); // Kembali dengan pesan sukses
    }
}
