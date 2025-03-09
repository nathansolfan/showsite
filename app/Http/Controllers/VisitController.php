<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Add this line


class VisitController extends Controller
{
    public function index()
    {
        $visits = Visit::latest()->paginate(50);
        $totalVisits = Visit::count();
        $uniqueIPs = Visit::distinct('ip')->count('ip');
        $popularPages = Visit::select('page', DB::raw('count(*) as total'))
        ->groupBy('page')
        ->orderBy('total', 'desc')
        ->take(10)
        ->get();

        return view('visits.index', compact('visits', 'totalVisits', 'uniqueIPs', 'popularPages'));
    }
}
