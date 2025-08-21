<?php

namespace App\Http\Controllers; // Mendefinisikan namespace untuk controller ini

use App\Models\KategoriProject; // Mengimpor model KategoriProject yang akan digunakan
use Illuminate\Http\Request; // Mengimpor class Request untuk menangani request HTTP
use Illuminate\Support\Facades\Log; // Mengimpor facade Log untuk pencatatan error

class KategoriController extends Controller // Mendefinisikan class controller untuk mengelola kategori
{
    /**
     * Display a listing of the resource.
     */
    public function index() // Method untuk menampilkan daftar kategori
    {
        $pages = "Kategori"; // Menetapkan judul halaman
        $kategoris = KategoriProject::orderBy('created_at', 'desc')->get(); // Mengambil semua data kategori dari database dan mengurutkannya dari yang terbaru
        return view('dashboard.pages.kategori')->with(compact('pages', 'kategoris')); // Menampilkan view dengan data kategori yang sudah diurutkan
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() // Method untuk menampilkan form pembuatan kategori (tidak diimplementasikan)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) // Method untuk menyimpan kategori baru ke database
    {
        $request->validate([ // Validasi input dari form
            'nama' => 'required|string|max:255', // Nama harus diisi, berupa string, maksimal 255 karakter
            'batch' => 'required|integer', // Batch harus diisi dan berupa angka
        ]);

        try { // Mencoba menyimpan data
            KategoriProject::create([ // Membuat record baru di tabel kategori_projects
                'nama' => $request->nama, // Mengambil nilai nama dari form
                'batch' => $request->batch, // Mengambil nilai batch dari form
            ]);

            return redirect()->back()->with('success', 'Kategori berhasil ditambahkan!'); // Redirect kembali dengan pesan sukses
        } catch (\Exception $e) { // Menangkap error jika terjadi
            Log::error('Store Kategori Error: ' . $e->getMessage()); // Mencatat error ke log
            return redirect()->back()->with('error', 'Gagal menambahkan kategori.'); // Redirect kembali dengan pesan error
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) // Method untuk menampilkan detail kategori (tidak diimplementasikan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) // Method untuk menampilkan form edit kategori (tidak diimplementasikan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) // Method untuk mengupdate kategori yang sudah ada
    {
        $request->validate([ // Validasi input dari form
            'nama' => 'required|string|max:255', // Nama harus diisi, berupa string, maksimal 255 karakter
            'batch' => 'required|integer', // Batch harus diisi dan berupa angka
        ]);

        try { // Mencoba mengupdate data
            $kategori = KategoriProject::findOrFail($id); // Mencari kategori berdasarkan ID, error jika tidak ditemukan
            $kategori->update([ // Mengupdate data kategori
                'nama' => $request->nama, // Mengupdate nama kategori
                'batch' => $request->batch, // Mengupdate batch kategori
            ]);

            return redirect()->back()->with('success', 'Kategori berhasil diperbarui!'); // Redirect kembali dengan pesan sukses
        } catch (\Exception $e) { // Menangkap error jika terjadi
            Log::error('Update Kategori Error: ' . $e->getMessage()); // Mencatat error ke log
            return redirect()->back()->with('error', 'Gagal memperbarui kategori.'); // Redirect kembali dengan pesan error
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) // Method untuk menghapus kategori
    {
        try { // Mencoba menghapus data
            $kategori = KategoriProject::findOrFail($id); // Mencari kategori berdasarkan ID, error jika tidak ditemukan
            $kategori->delete(); // Menghapus kategori dari database

            return redirect()->back()->with('success', 'Kategori berhasil dihapus!'); // Redirect kembali dengan pesan sukses
        } catch (\Exception $e) { // Menangkap error jika terjadi
            Log::error('Delete Kategori Error: ' . $e->getMessage()); // Mencatat error ke log
            return redirect()->back()->with('error', 'Gagal menghapus kategori.'); // Redirect kembali dengan pesan error
        }
    }
}
