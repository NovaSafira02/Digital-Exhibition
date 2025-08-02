<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Tampilkan halaman pengaturan admin
     */
    public function settings()
    {
        $pages = "Pengaturan Admin";
        return view('dashboard.pages.admin-settings', compact('pages'));
    }

    /**
     * Update password admin
     */
    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ], [
            'current_password.required' => 'Password saat ini harus diisi',
            'new_password.required' => 'Password baru harus diisi',
            'new_password.min' => 'Password baru minimal 6 karakter',
            'new_password.confirmed' => 'Konfirmasi password tidak cocok',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = Auth::user();

        // Cek password saat ini
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Password saat ini tidak benar.');
        }

        // Update password
        $user->password = Hash::make($request->new_password);
        $user->update();

        return back()->with('success', 'Password berhasil diubah.');
    }
}
