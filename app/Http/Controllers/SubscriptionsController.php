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

        return view('subscriptions.show', [
            'subscription' => $subscription,
            'similar' => $similar,
        ]);
    }

    public function compare()
    {
        $subscriptions = Subscription::with('category')
            ->orderBy('price', 'asc')
            ->limit(3)
            ->get();

        return view('subscriptions.compare', [
            'subscriptions' => $subscriptions
        ]);
    }

    // Novo método para redirecionar com tracking
    public function redirect($slug)
    {
        $subscription = Subscription::where('slug', $slug)->firstOrFail();

        // Incrementar contador de clicks
        $subscription->increment('click_count');
        $subscription->update(['last_clicked_at' => now()]);

        // Usar affiliate_url se existir, senão usar website_url
        $url = $subscription->affiliate_url ?? $subscription->website_url;

        // Adicionar UTM parameters para tracking
        $url = $this->addUtmParameters($url, $subscription);

        return redirect()->away($url);
    }

    // Método auxiliar para adicionar UTM parameters
    private function addUtmParameters($url, $subscription)
    {
        $params = [
            'utm_source' => 'yoursite',
            'utm_medium' => 'referral',
            'utm_campaign' => 'subscription_compare',
            'utm_content' => $subscription->slug
        ];

        $separator = parse_url($url, PHP_URL_QUERY) ? '&' : '?';

        return $url . $separator . http_build_query($params);
    }

    public function redirect($slug)
    {
        $subscription = Subscription::where('slug', $slug)->firstOrFail();

        $subscription->increment('click_count');
        $subscription->update(['last_clicked_at' => now()]);

        return redirect()->away($subscription->affiliate_url ?? $subscription->website_url);
    }



//    // Opcional: página de estatísticas
//    public function stats()
//    {
//        $topClicked = Subscription::with('category')
//            ->orderBy('click_count', 'desc')
//            ->limit(10)
//            ->get();
//
//        $totalClicks = Subscription::sum('click_count');
//
//        $clicksByCategory = Subscription::with('category')
//            ->selectRaw('category_id, SUM(click_count) as total_clicks')
//            ->groupBy('category_id')
//            ->orderBy('total_clicks', 'desc')
//            ->get();
//
//        return view('subscriptions.stats', [
//            'topClicked' => $topClicked,
//            'totalClicks' => $totalClicks,
//            'clicksByCategory' => $clicksByCategory
//        ]);
//    }
}
