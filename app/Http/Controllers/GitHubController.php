<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Http;

class GitHubController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->input('page', 1);
        $perPage = 6;

        $gitHubUsername = 'nathansolfan';
        $response = Http::get("https://api.github.com/users/{$gitHubUsername}/repos", [
            'page' => $page,
            'per_page' => $perPage,
        ]);

        $repos = $response->json();
        $totalRepos = (int) $response->header('X-Total-Count', count($repos)); // Fallback to the count of repos if the header is missing or invalid


        // Create a manual paginator

        $paginator = new LengthAwarePaginator(
            $repos,
            $totalRepos,  // Use the integer total
            $perPage,
            $page,
            ['path' => $request->url()]
        );

        return view('pages.works', compact('paginator'));
    }
}
