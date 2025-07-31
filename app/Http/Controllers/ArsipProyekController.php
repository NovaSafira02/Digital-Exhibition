<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArsipProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = "Project Mentee";
        
        // Ambil proyek yang memiliki status "Disetujui" sebagai status terakhir
        // Menggunakan subquery untuk mendapatkan ID proyek dengan status terakhir = "Disetujui"
        $projectIds = Status::select('projectId')
            ->whereIn('id', function($query) {
                $query->select(DB::raw('MAX(id)'))
                    ->from('statuses')
                    ->groupBy('projectId');
            })
            ->where('status', 'Disetujui')
            ->pluck('projectId');
        
        // Ambil user yang sedang login
        $user = Auth::user();
        
        // Jika user adalah admin, tampilkan semua project
        if ($user->isAdmin == 1) {
            $projects = Project::with(['kategori', 'MentorGroup.MentorProject.Mentor', 'Member.MemberMaster', 'Teches', 'Status'])
                ->whereIn('id', $projectIds)
                ->orderBy('created_at', 'desc')
                ->get();
        } else {
            // Jika user adalah mentor, tampilkan project sesuai kategori
            $mentorKategoriId = $user->MentorProject->kategoriId ?? null;
                
            if ($mentorKategoriId) {
                $projects = Project::with(['kategori', 'MentorGroup.MentorProject.Mentor', 'Member.MemberMaster', 'Teches', 'Status'])
                    ->whereIn('id', $projectIds)
                    ->where('kategoriId', $mentorKategoriId)
                    ->orderBy('created_at', 'desc')
                    ->get();
            } else {
                // Fallback jika tidak ada kategori
                $projects = collect();
            }
        }
        
        return view('dashboard.pages.arsip', compact('projects', 'pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}