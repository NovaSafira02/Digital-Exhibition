<?php

namespace App\Http\Controllers; // Mendefinisikan namespace untuk controller

// Import class-class yang dibutuhkan
use App\Models\Mentor; // Model untuk mentor
use App\Models\User; // Model untuk user
use Illuminate\Http\Request; // Untuk menangani request HTTP
use Illuminate\Support\Facades\Hash; // Untuk hashing password
use Illuminate\Support\Facades\Validator; // Untuk validasi input

class AkunMentorController extends Controller // Mendefinisikan class AkunMentorController yang mewarisi class Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() // Method untuk menampilkan daftar mentor
    {
        $mentors = Mentor::orderBy('created_at','desc')->get(); // Mengambil semua data mentor diurutkan berdasarkan created_at secara descending
        $pages = "Akun Mentor"; // Mendefinisikan variabel $pages untuk judul halaman
        return view('dashboard.pages.mentor', compact('mentors', 'pages')); // Mengembalikan view dengan data mentors dan pages
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() // Method untuk menampilkan form pembuatan mentor (tidak diimplementasikan)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) // Method untuk menyimpan data mentor baru
    {
        $request->validate([ // Validasi input
            'username' => 'required|unique:mentors,username', // Username harus diisi dan unik di tabel mentors
        ]);

        try {
            $mentor = Mentor::create([ // Membuat mentor baru
                'username' => $request->username, // Mengisi username dari input
            ]);

            return redirect()->back()->with('success', 'Mentor berhasil ditambahkan!'); // Kembali dengan pesan sukses
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menambahkan mentor: ' . $e->getMessage()); // Kembali dengan pesan error
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) // Method untuk menampilkan detail mentor (tidak diimplementasikan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) // Method untuk menampilkan form edit mentor (tidak diimplementasikan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) // Method untuk mengupdate data mentor
    {
        $request->validate([ // Validasi input
            'username' => 'required|unique:mentors,username,' . $id, // Username harus diisi dan unik di tabel mentors kecuali untuk id ini
        ]);

        try {
            $mentor = Mentor::findOrFail($id); // Mencari mentor berdasarkan id
            $mentor->update([ // Mengupdate data mentor
                'username' => $request->username, // Mengupdate username dari input
            ]);

            return redirect()->back()->with('success', 'Mentor berhasil diperbarui!'); // Kembali dengan pesan sukses
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal memperbarui mentor: ' . $e->getMessage()); // Kembali dengan pesan error
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) // Method untuk menghapus mentor
    {
        try {
            $mentor = Mentor::findOrFail($id); // Mencari mentor berdasarkan id

            $mentor->delete(); // Menghapus mentor
            return redirect()->back()->with('success', 'Mentor berhasil dihapus!'); // Kembali dengan pesan sukses
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus mentor: ' . $e->getMessage()); // Kembali dengan pesan error
        }
    }
}
