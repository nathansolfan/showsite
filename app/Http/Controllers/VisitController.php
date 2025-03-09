<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function index()
    {
        $visits = Visit::latest()->paginate(50);
        $totalVisits = Visit::count();
        $uniqueIPs = Visit::distinct('ip')->count('ip');
        $todayVisits = Visit::whereDate('created_at', today())->count();
        $last24Hours = Visit::where('created_at', '>=', now()->subDay())->count();
        $last7Days = Visit::where('created_at', '>=', now()->subDays(7))->count();
        $last30Days = Visit::where('created_at', '>=', now()->subDays(30))->count();

        // Get browser stats
        $browsers = [
            'Chrome' => Visit::where('user_agent', 'like', '%Chrome%')->where('user_agent', 'not like', '%Edg%')->count(),
            'Edge' => Visit::where('user_agent', 'like', '%Edg%')->count(),
            'Firefox' => Visit::where('user_agent', 'like', '%Firefox%')->count(),
            'Safari' => Visit::where('user_agent', 'like', '%Safari%')->where('user_agent', 'not like', '%Chrome%')->count(),
            'Other' => Visit::whereRaw("user_agent NOT LIKE '%Chrome%' AND user_agent NOT LIKE '%Edg%' AND user_agent NOT LIKE '%Firefox%' AND user_agent NOT LIKE '%Safari%'")->count()
        ];

        // Get device stats
        $devices = [
            'Desktop' => Visit::where('user_agent', 'not like', '%Mobile%')
                ->where('user_agent', 'not like', '%Android%')
                ->where('user_agent', 'not like', '%iPhone%')
                ->where('user_agent', 'not like', '%iPad%')
                ->count(),
            'Mobile' => Visit::where(function($query) {
                $query->where('user_agent', 'like', '%Mobile%')
                    ->orWhere('user_agent', 'like', '%Android%')
                    ->orWhere('user_agent', 'like', '%iPhone%');
            })->count(),
            'Tablet' => Visit::where(function($query) {
                $query->where('user_agent', 'like', '%iPad%')
                    ->orWhere('user_agent', 'like', '%Tablet%');
            })->count()
        ];

        $popularPages = Visit::select('page', DB::raw('count(*) as total'))
            ->groupBy('page')
            ->orderBy('total', 'desc')
            ->take(10)
            ->get();

        return view('visits.index', compact(
            'visits',
            'totalVisits',
            'uniqueIPs',
            'todayVisits',
            'last24Hours',
            'last7Days',
            'last30Days',
            'browsers',
            'devices',
            'popularPages'
        ));
    }
}




// public function index()
//     {
//         $visits = Visit::latest()->paginate(50);
//         $totalVisits = Visit::count();
//         $uniqueIPs = Visit::distinct('ip')->count('ip');
//         $popularPages = Visit::select('page', DB::raw('count(*) as total'))
//         ->groupBy('page')
//         ->orderBy('total', 'desc')
//         ->take(10)
//         ->get();

//         return view('visits.index', compact('visits', 'totalVisits', 'uniqueIPs', 'popularPages'));
//     }
