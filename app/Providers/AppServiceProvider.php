<?php

namespace App\Providers;

use App\Models\Pesan;
use App\Models\Status;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        if (app()->environment('production')) {
            \Illuminate\Support\Facades\URL::forceScheme('https');
        }
        
        // View composer untuk menghitung pesan yang belum dibaca
        View::composer('dashboard.partials.sidebar', function ($view) {
            $viewedMessageIds = session('viewed_messages', []);
            $unreadCount = Pesan::whereNotIn('id', $viewedMessageIds)->count();
            $view->with('unreadMessagesCount', $unreadCount);
            
            // Menghitung status proyek baru untuk mentee
            if (Auth::check() && Auth::user()->isAdmin == 0 && Auth::user()->MentorProject == null) {
                $viewedStatusIds = session('viewed_status_ids', []);
                $userId = Auth::user()->id;
                
                // Hitung jumlah status baru yang belum dilihat
                $newStatusCount = Status::whereHas('Project', function($query) use ($userId) {
                    $query->where('userId', $userId);
                })->whereNotIn('id', $viewedStatusIds)->count();
                
                $view->with('newStatusCount', $newStatusCount);
            }
        });
    }
}
