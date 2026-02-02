<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        \Illuminate\Support\Facades\View::composer('layouts.admin', function ($view) {
            $pendingReports = \App\Models\Report::where('status', 'pending')->latest()->take(5)->get();
            $pendingCount = \App\Models\Report::where('status', 'pending')->count();
            $view->with('pendingReports', $pendingReports)->with('pendingCount', $pendingCount);
        });

        \Illuminate\Support\Facades\View::composer('layouts.app', function ($view) {
            if (\Illuminate\Support\Facades\Auth::check()) {
                $user = \Illuminate\Support\Facades\Auth::user();
                $userNotifications = \App\Models\Report::where('user_id', $user->id)
                    ->where('status', 'replied')
                    ->where('is_read', false)
                    ->latest()
                    ->take(5)
                    ->get();
                $userNotificationCount = \App\Models\Report::where('user_id', $user->id)
                    ->where('status', 'replied')
                    ->where('is_read', false)
                    ->count();
                $view->with('userNotifications', $userNotifications)->with('userNotificationCount', $userNotificationCount);
            }
        });
    }
}
