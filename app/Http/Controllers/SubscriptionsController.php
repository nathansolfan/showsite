<?php

namespace App\Http\Controllers;

use App\Models\Scrapers\Category;
use App\Models\Scrapers\Subscription;

class SubscriptionsController extends Controller
{
    public function index()
    {
        $subscriptions = Subscription::with('category')
            ->orderBy('price', 'asc')
            ->get()
            ->groupBy('category.name');

        $categories = Category::withCount('subscriptions')->get();

        return view('subscriptions.index', [
            'subscriptions' => $subscriptions,
            'categories' => $categories
        ]);
    }

    public function show($slug)
    {
        $subscription = Subscription::where('slug', $slug)
            ->with('category')
            ->firstOrFail();

        $similar = Subscription::where('category_id', $subscription->category_id)
            ->where('id', '!=', $subscription->id)
            ->limit(3)
            ->get();

    }


    public function compare()
    {

    }
}
