<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Http;

class GitHubController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->input('page', 1); // current page
        $perPage = 6; // items per page

        $gitHubUsername = 'nathansolfan';
        $response = Http::get("https://api.github.com/users/{$gitHubUsername}/repos", [
            'page' => $page,
            'per_page' => $perPage,
        ]);

        $repos = $response->json();


        // Check if there are more repositories (via the 'Link' header)
        $linkHeader = $response->header('Link');
        // item x page if no header
        $totalRepos = count($repos); // Fallback count
        dd($linkHeader);

        // If 'Link' exists, we assume pagination info is there
        if ($linkHeader) {
            $totalRepos = $this->estimateTotalFromLinkHeader($linkHeader, $perPage);
        }

        // Create paginator instance
        $paginator = new LengthAwarePaginator(
            $repos,
            $totalRepos,
            $perPage,
            $page,
            ['path' => $request->url()]  // Pagination links generation
        );

        return view('pages.works', compact('paginator'));
    }

    /**
     * Estimate the total number of items from the 'Link' header.
     */
    private function estimateTotalFromLinkHeader($header, $perPage)
    {
        $links = explode(',', $header);
        foreach ($links as $link) {
            if (strpos($link, 'rel="last"') !== false) {
                // regex
                preg_match('/page=(\d+)/', $link, $matches);
                $lastPage = (int)($matches[1] ?? 1);
                return $lastPage * $perPage;
            }
        }
        return $perPage;  // If no 'last' link, assume only current page
    }
}

