<x-layout>
    <x-slot name="title">{{ $subscription->name }} - Price & Details</x-slot>

    <!-- Breadcrumb -->
    <div class="bg-gray-100 py-4">
        <div class="container mx-auto px-4">
            <nav class="flex text-gray-600 text-sm">
                <a href="{{ route('subscriptions.index') }}" class="hover:text-purple-600">Subscriptions</a>
                <span class="mx-2">/</span>
                <a href="{{ route('subscriptions.index') }}#{{ $subscription->category->slug }}"
                   class="hover:text-purple-600">{{ $subscription->category->name }}</a>
                <span class="mx-2">/</span>
                <span class="text-gray-800">{{ Str::before($subscription->name, ' - ') }}</span>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">

                <!-- Service Header -->
                <div class="text-center mb-12" data-aos="fade-up">
                    <h1 class="text-5xl font-bold text-gray-800 mb-4">
                        {{ Str::before($subscription->name, ' - ') }}
                    </h1>
                    <p class="text-2xl text-gray-600">
                        {{ Str::after($subscription->name, ' - ') }} Plan
                    </p>
                </div>

                <!-- Price Card -->
                <div
                    class="bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl shadow-2xl p-12 text-white text-center mb-12"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="mb-6">
                        <div class="text-6xl font-bold mb-2">
                            £{{ number_format($subscription->price, 2) }}
                        </div>
                        <div class="text-2xl opacity-90">per month</div>
                    </div>

                    <!-- Affiliate Link Button -->
                    {{--                    <a href="{{ $subscription->affiliate_url ?? $subscription->website_url }}"--}}
                    {{--                       target="_blank"--}}
                    {{--                       rel="nofollow sponsored"--}}
                    {{--                       class="inline-block bg-white text-purple-600 px-12 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition-all transform hover:scale-105 shadow-xl">--}}
                    {{--                        Sign Up Now →--}}
                    {{--                    </a>--}}

                    {{--                    <a href="{{ route('affiliate.redirect', $subscription->slug) }}"--}}
                    {{--                       target="_blank"--}}
                    {{--                       rel="nofollow sponsored"--}}
                    {{--                       class="inline-block bg-white text-purple-600 px-12 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition-all transform hover:scale-105 shadow-xl">--}}
                    {{--                        Sign Up Now →--}}
                    {{--                    </a>--}}

                    <p class="text-sm mt-4 opacity-75">
                        Visit official website
                    </p>
                </div>

                <!-- Key Info -->
                <div class="grid md:grid-cols-3 gap-6 mb-12">
                    <div class="bg-gray-50 rounded-xl p-6 text-center" data-aos="fade-up">
                        <div class="text-3xl mb-2">💷</div>
                        <div class="text-gray-600 text-sm mb-1">Monthly Cost</div>
                        <div class="text-xl font-bold text-gray-800">£{{ number_format($subscription->price, 2) }}</div>
                    </div>
                    <div class="bg-gray-50 rounded-xl p-6 text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-3xl mb-2">📅</div>
                        <div class="text-gray-600 text-sm mb-1">Yearly Cost</div>
                        <div class="text-xl font-bold text-gray-800">
                            £{{ number_format($subscription->price * 12, 2) }}</div>
                    </div>
                    <div class="bg-gray-50 rounded-xl p-6 text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="text-3xl mb-2">📂</div>
                        <div class="text-gray-600 text-sm mb-1">Category</div>
                        <div class="text-xl font-bold text-gray-800">{{ $subscription->category->name }}</div>
                    </div>
                </div>

                <!-- Similar Services -->
                @if($similar->count() > 0)
                    <div class="border-t border-gray-200 pt-12" data-aos="fade-up">
                        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">
                            Similar Services
                        </h2>
                        <div class="grid md:grid-cols-3 gap-6">
                            @foreach($similar as $service)
                                <a href="{{ route('subscriptions.show', $service->slug) }}"
                                   class="bg-white border-2 border-gray-200 rounded-xl p-6 hover:border-purple-500 hover:shadow-xl transition-all transform hover:-translate-y-1">
                                    <h3 class="font-bold text-lg mb-2">{{ Str::before($service->name, ' - ') }}</h3>
                                    <p class="text-gray-600 text-sm mb-4">{{ Str::after($service->name, ' - ') }}</p>
                                    <div class="flex items-baseline">
                                        <span
                                            class="text-2xl font-bold text-purple-600">£{{ number_format($service->price, 2) }}</span>
                                        <span class="text-gray-500 text-sm ml-1">/month</span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Back Button -->
                <div class="mt-12 text-center">
                    <a href="{{ route('subscriptions.index') }}"
                       class="inline-flex items-center text-purple-600 hover:text-purple-700 font-semibold">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 19l-7-7 7-7"></path>
                        </svg>
                        Back to All Services
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layout>
