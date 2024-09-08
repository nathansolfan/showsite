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

        // Create a manual paginator

        $paginator = new LengthAwarePaginator(
            $repos,
            $response->header('X-Total-Count'),
            $perPage,
            $page,
            ['path' => $request->url()]
        );

        return view('projects', compact('paginator'));
    }
}
