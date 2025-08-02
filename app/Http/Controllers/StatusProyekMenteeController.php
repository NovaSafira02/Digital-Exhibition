<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatusProyekMenteeController extends Controller
{
    public function index()
    {
        $pages = "Status Proyek";
        $user = Auth::user()->id;
        $projects = Project::where('userId', $user)
            ->with(['Status' => function($query) {
                $query->orderBy('created_at', 'desc');
            }])
            ->orderBy('created_at', 'desc')
            ->get();
            
        // Kumpulkan semua ID status yang dilihat
        $statusIds = [];
        foreach ($projects as $project) {
            foreach ($project->Status as $status) {
                $statusIds[] = $status->id;
            }
        }
        
        // Simpan ID status yang sudah dilihat dalam session
        session(['viewed_status_ids' => $statusIds]);
        
        return view('dashboard.pages.status-mente')->with(compact('pages', 'projects'));
    }
}
