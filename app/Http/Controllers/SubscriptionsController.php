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

    public function show()
    {

    }


    public function compare()
    {

    }
}
