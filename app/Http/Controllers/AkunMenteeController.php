<?php

namespace App\Http\Controllers; // Mendefinisikan namespace untuk controller

// Import class-class yang dibutuhkan
use App\Models\KategoriProject; // Model untuk kategori project
use App\Models\Mentee; // Model untuk mentee
use App\Models\User; // Model untuk user
use Illuminate\Http\Request; // Untuk menangani request HTTP
use Illuminate\Support\Facades\DB; // Untuk transaksi database
use Illuminate\Support\Facades\Hash; // Untuk hashing password
use Illuminate\Support\Facades\Validator; // Untuk validasi input

class AkunMenteeController extends Controller // Mendefinisikan class AkunMenteeController yang mewarisi class Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() // Method untuk menampilkan daftar mentee
    {
        $mentees = Mentee::with(['user', 'kategori'])->get(); // Mengambil semua data mentee beserta relasi user dan kategori
        $kategoris = KategoriProject::all(); // Mengambil semua data kategori project
        $pages = "Akun Mentee"; // Mendefinisikan variabel $pages untuk judul halaman
        return view('dashboard.pages.mentee', compact('mentees', 'kategoris', 'pages')); // Mengembalikan view dengan data mentees, kategoris, dan pages
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() // Method untuk menampilkan form pembuatan mentee (tidak diimplementasikan)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) // Method untuk menyimpan data mentee baru
    {
        $request->validate([ // Validasi input
            'email' => 'required|email|unique:users,email', // Email harus diisi, format email, dan unik di tabel users
            'username' => 'required|unique:mentees,username', // Username harus diisi dan unik di tabel mentees
            'password' => 'required|min:6', // Password harus diisi dan minimal 6 karakter
            'kategoriId' => 'required|exists:kategori_projects,id', // KategoriId harus diisi dan ada di tabel kategori_projects
        ]);

        DB::beginTransaction(); // Memulai transaksi database

        try {
            $user = User::create([ // Membuat user baru
                'email' => $request->email, // Mengisi email dari input
                'password' => Hash::make($request->password), // Mengisi password yang di-hash dari input
                'isAdmin' => 0, // Mengatur isAdmin = 0 (bukan admin)
            ]);

            Mentee::create([ // Membuat mentee baru
                'userId' => $user->id, // Mengisi userId dengan id user yang baru dibuat
                'username' => $request->username, // Mengisi username dari input
                'kategoriId' => $request->kategoriId, // Mengisi kategoriId dari input
            ]);

            DB::commit(); // Menyimpan transaksi database
            return redirect()->back()->with('success', 'Akun Mentee berhasil dibuat!'); // Kembali dengan pesan sukses
        } catch (\Exception $e) {
            DB::rollback(); // Membatalkan transaksi database jika terjadi error
            return redirect()->back()->with('error', 'Gagal menambahkan mentee: ' . $e->getMessage()); // Kembali dengan pesan error
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) // Method untuk menampilkan detail mentee (tidak diimplementasikan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) // Method untuk menampilkan form edit mentee (tidak diimplementasikan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) // Method untuk mengupdate data mentee
    {
        $request->validate([ // Validasi input
            'username' => 'required|unique:mentees,username,' . $id, // Username harus diisi dan unik di tabel mentees kecuali untuk id ini
            'kategoriId' => 'required|exists:kategori_projects,id', // KategoriId harus diisi dan ada di tabel kategori_projects
        ]);

        try {
            $mentee = Mentee::findOrFail($id); // Mencari mentee berdasarkan id
            $mentee->update([ // Mengupdate data mentee
                'username' => $request->username, // Mengupdate username dari input
                'kategoriId' => $request->kategoriId, // Mengupdate kategoriId dari input
            ]);

            return redirect()->back()->with('success', 'Data mentee berhasil diperbarui.'); // Kembali dengan pesan sukses
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal memperbarui mentee: ' . $e->getMessage()); // Kembali dengan pesan error
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) // Method untuk menghapus mentee
    {
        try {
            $mentee = Mentee::findOrFail($id); // Mencari mentee berdasarkan id
            $user = User::find($mentee->userId); // Mencari user berdasarkan userId mentee

            $mentee->delete(); // Menghapus mentee
            if ($user) { // Jika user ditemukan
                $user->delete(); // Menghapus user
            }

            return redirect()->back()->with('success', 'Mentee berhasil dihapus.'); // Kembali dengan pesan sukses
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus mentee: ' . $e->getMessage()); // Kembali dengan pesan error
        }
    }

    public function resetPassword(Request $request, $id) // Method untuk mereset password mentee
    {
        $validator = Validator::make($request->all(), [ // Membuat validator untuk memvalidasi input
            'password' => 'required|min:6', // Password harus diisi dan minimal 6 karakter
        ]);

        if ($validator->fails()) { // Cek apakah validasi gagal
            return redirect()->back()->withErrors($validator)->withInput(); // Kembali ke halaman sebelumnya dengan error dan input
        }

        try {
            $mentee = Mentee::findOrFail($id); // Mencari mentee berdasarkan id
            $user = User::findOrFail($mentee->userId); // Mencari user berdasarkan userId mentee
            $user->update([ // Mengupdate data user
                'password' => Hash::make($request->password), // Mengupdate password yang di-hash dari input
            ]);

            return redirect()->back()->with('success', 'Password berhasil direset!'); // Kembali dengan pesan sukses
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal reset password: ' . $e->getMessage()); // Kembali dengan pesan error
        }
    }
}
