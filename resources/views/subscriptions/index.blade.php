<x-layout>
    <x-slot name="title">Compare UK Subscription Prices - Save Money</x-slot>

    <!-- Hero Section -->
    {{--    <section class="bg-gradient-to-br from-blue-600 via-purple-600 to-pink-500 text-white py-20">--}}
    {{--        <div class="container mx-auto px-4 text-center">--}}
    {{--            <h1 class="text-5xl md:text-6xl font-bold mb-6" data-aos="fade-up">--}}
    {{--                Compare Subscription Prices--}}
    {{--            </h1>--}}
    {{--            <p class="text-xl md:text-2xl mb-8 opacity-90" data-aos="fade-up" data-aos-delay="100">--}}
    {{--                Find the best deals on streaming, music, and more--}}
    {{--            </p>--}}
    {{--            <div class="flex gap-4 justify-center" data-aos="fade-up" data-aos-delay="200">--}}
    {{--                <a href="#streaming"--}}
    {{--                   class="bg-white text-purple-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition">--}}
    {{--                    View All Services--}}
    {{--                </a>--}}
    {{--                <a href="{{ route('subscriptions.compare') }}"--}}
    {{--                   class="border-2 border-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-purple-600 transition">--}}
    {{--                    Compare Now--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    <!-- Stats Section -->
    <section class="py-12 bg-white border-b">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div data-aos="fade-up">
                    <div class="text-4xl font-bold text-purple-600 mb-2">
                        {{ $subscriptions->flatten()->count() ?? 0 }}
                    </div>
                    <div class="text-gray-600">Services Compared</div>
                </div>
                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="text-4xl font-bold text-purple-600 mb-2">
                        @if($subscriptions->flatten()->count() > 0)
                            £{{ number_format($subscriptions->flatten()->min('price'), 2) }}
                        @else
                            £0.00
                        @endif
                    </div>
                    <div class="text-gray-600">Lowest Price</div>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="text-4xl font-bold text-purple-600 mb-2">
                        {{ $categories->count() ?? 0 }}
                    </div>
                    <div class="text-gray-600">Categories</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscriptions by Category -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            @if($subscriptions->count() > 0)
                @foreach($subscriptions as $categoryName => $subs)
                    <div id="{{ Str::slug($categoryName ?? 'uncategorized') }}" class="mb-16" data-aos="fade-up">
                        <!-- Category Header -->
                        <div class="flex items-center justify-between mb-8">
                            <h2 class="text-3xl font-bold text-gray-800">
                                @if($categoryName === 'Streaming')
                                    🎬 {{ $categoryName }}
                                @elseif($categoryName === 'Música')
                                    🎵 {{ $categoryName }}
                                @else
                                    📦 {{ $categoryName ?? 'Other' }}
                                @endif
                            </h2>
                            <span class="text-gray-500">{{ $subs->count() }} services</span>
                        </div>

                        <!-- Services Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                            @foreach($subs as $subscription)
                                <a href="{{ route('subscriptions.show', $subscription->slug) }}"
                                   class="bg-white rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 p-6 border-2 border-transparent hover:border-purple-500"
                                   data-aos="fade-up"
                                   data-aos-delay="{{ $loop->index * 50 }}">

                                    <!-- Service Name -->
                                    <h3 class="text-xl font-bold text-gray-800 mb-2">
                                        {{ Str::before($subscription->name, ' - ') }}
                                    </h3>

                                    <!-- Plan Name -->
                                    <p class="text-gray-600 mb-4">
                                        {{ Str::after($subscription->name, ' - ') }}
                                    </p>

                                    <!-- Price -->
                                    <div class="flex items-baseline mb-4">
                                        <span class="text-3xl font-bold text-purple-600">
                                            £{{ number_format($subscription->price, 2) }}
                                        </span>
                                        <span class="text-gray-500 ml-2">/month</span>
                                    </div>

                                    <!-- CTA Button -->
                                    <div class="mt-4 pt-4 border-t border-gray-200">
                                        <span
                                            class="text-purple-600 font-semibold flex items-center justify-between group">
                                            View Details
                                            <svg
                                                class="w-5 h-5 transform group-hover:translate-x-1 transition-transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            @else
                <!-- Empty State -->
                <div class="text-center py-20">
                    <div class="text-6xl mb-4">📭</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">No Subscriptions Yet</h3>
                    <p class="text-gray-600">Run <code class="bg-gray-200 px-2 py-1 rounded">php artisan
                            scrape:prices</code> to get started</p>
                </div>
            @endif
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-purple-600 to-pink-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-4" data-aos="fade-up">
                Ready to Save Money?
            </h2>
            <p class="text-xl mb-8 opacity-90" data-aos="fade-up" data-aos-delay="100">
                Compare all services side by side and find the perfect plan for you
            </p>
            <a href="{{ route('subscriptions.compare') }}"
               class="inline-block bg-white text-purple-600 px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition"
               data-aos="fade-up" data-aos-delay="200">
                Compare All Services →
            </a>
        </div>
    </section>
</x-layout>
