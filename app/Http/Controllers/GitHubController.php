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
        // Check if there are more repositories (via the 'Link' header)
        $linkHeader = $response->header('Link');
        $totalRepos = count($repos); // Fallback count

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
