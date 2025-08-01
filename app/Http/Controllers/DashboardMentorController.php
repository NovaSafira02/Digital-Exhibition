<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardMentorController extends Controller
{
    public function index()
    {
        $pages = "Dashboard Mentor";
        
        // Ambil user yang sedang login
        $user = Auth::user();
        
        // Ambil kategori dari mentor yang login (ambil yang terbaru)
        $mentorProject = $user->MentorProject->latest()->first();
        $mentorKategoriId = $mentorProject->kategoriId ?? null;
        
        // Modifikasi query untuk hanya menampilkan proyek yang belum ditinjau
        // dan memiliki kategori yang sesuai dengan kategori mentor
        if ($mentorKategoriId) {
            $projects = Project::with('kategori')
                ->whereDoesntHave('Status')
                ->where('kategoriId', $mentorKategoriId)
                ->get();
        } else {
            // Fallback jika tidak ada kategori (seharusnya tidak terjadi)
            $projects = collect();
        }
            
        return view('dashboard.pages.index-mentor', compact('projects', 'pages'));
    }

    // public function show($projectId)
    // {
    //     $project = Project::with('Member.MemberMaster')->findOrFail($projectId)->first();
    //     $pages = "Detail Project";
    //     return view('dashboard.pages.approvment', compact('project', 'pages'));
    // }

    public function show($projectId)
    {
        $project = Project::find($projectId);
        $pages = "Detail Project";
        return view('dashboard.pages.approvment', compact('project', 'pages'));
    }

    public function setujui(Project $project)
    {

        Status::create([
            'status' => 'Disetujui',
            'projectId' => $project->id,
            'comment' => 'Project disetujui oleh Mentor',
        ]);

        return back()->with('success', 'Project disetujui.');
        return redirect()->route('status-proyek.index')->with('success', 'Project disetujui dan dipindahkan ke halaman status.');
    }

    public function revisi(Request $request, Project $project)
    {
        $request->validate([
            'comment' => 'required|string'
        ]);

        Status::create([
            'status' => 'Revisi',
            'projectId' => $project->id,
            'comment' => $request->comment,
        ]);

        return back()->with('error', 'Project dikembalikan untuk revisi.');
    }

    public function best(Request $request, Project $project)
    {
        $project->update([
            'is_best' => 1,
        ]);

        return back()->with('success', 'Project Sudah Menjadi Best!');
    }

    public function cancelBest(Request $request, Project $project)
    {
        $project->update([
            'is_best' => 0,
        ]);

        return back()->with('success', 'Status Best Project telah dibatalkan!');
    }
}
