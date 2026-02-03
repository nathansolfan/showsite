<x-layout>
    <x-slot name="title">Compare Subscription Services - Find the Best Deal</x-slot>

    <!-- Hero -->
    <section class="bg-gradient-to-br from-purple-600 to-pink-600 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl font-bold mb-4" data-aos="fade-up">
                Compare Services Side by Side
            </h1>
            <p class="text-xl opacity-90" data-aos="fade-up" data-aos-delay="100">
                Find the perfect plan for your needs
            </p>
        </div>
    </section>

    <!-- Comparison Table -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">

            <!-- Desktop View -->
            <div class="hidden md:block overflow-x-auto">
                <table class="w-full bg-white rounded-xl shadow-lg overflow-hidden">
                    <thead>
                    <tr class="bg-gradient-to-r from-purple-600 to-pink-600 text-white">
                        <th class="px-6 py-4 text-left text-lg font-bold">Service</th>
                        @foreach($subscriptions as $sub)
                            <th class="px-6 py-4 text-center text-lg font-bold" data-aos="fade-down"
                                data-aos-delay="{{ $loop->index * 100 }}">
                                {{ Str::before($sub->name, ' - ') }}
                            </th>
                        @endforeach
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Plan Name -->
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold text-gray-700">Plan</td>
                        @foreach($subscriptions as $sub)
                            <td class="px-6 py-4 text-center" data-aos="fade-up">
                                {{ Str::after($sub->name, ' - ') }}
                            </td>
                        @endforeach
                    </tr>

                    <!-- Price -->
                    <tr class="bg-gray-50 border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold text-gray-700">Monthly Price</td>
                        @foreach($subscriptions as $sub)
                            <td class="px-6 py-4 text-center" data-aos="fade-up"
                                data-aos-delay="{{ $loop->index * 50 }}">
                                <div class="text-2xl font-bold text-purple-600">
                                    £{{ number_format($sub->price, 2) }}
                                </div>
                            </td>
                        @endforeach
                    </tr>

                    <!-- Yearly Cost -->
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold text-gray-700">Yearly Cost</td>
                        @foreach($subscriptions as $sub)
                            <td class="px-6 py-4 text-center" data-aos="fade-up"
                                data-aos-delay="{{ $loop->index * 50 }}">
                                <div class="text-lg text-gray-600">
                                    £{{ number_format($sub->price * 12, 2) }}
                                </div>
                            </td>
                        @endforeach
                    </tr>

                    <!-- Category -->
                    <tr class="bg-gray-50 border-b border-gray-200">
                        <td class="px-6 py-4 font-semibold text-gray-700">Category</td>
                        @foreach($subscriptions as $sub)
                            <td class="px-6 py-4 text-center" data-aos="fade-up"
                                data-aos-delay="{{ $loop->index * 50 }}">
                                {{ $sub->category->name }}
                            </td>
                        @endforeach
                    </tr>

                    <!-- CTA Buttons -->
                    <tr>
                        <td class="px-6 py-6 font-semibold text-gray-700"></td>
                        @foreach($subscriptions as $sub)
                            <td class="px-6 py-6 text-center" data-aos="fade-up"
                                data-aos-delay="{{ $loop->index * 50 }}">
                                <a href="{{ route('subscriptions.show', $sub->slug) }}"
                                   class="inline-block bg-purple-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-purple-700 transition w-full">
                                    View Details
                                </a>
                            </td>
                        @endforeach
                    </tr>
                    </tbody>
                </table>
            </div>

            <!-- Mobile View -->
            <div class="md:hidden space-y-6">
                @foreach($subscriptions as $sub)
                    <div class="bg-white rounded-xl shadow-lg p-6" data-aos="fade-up"
                         data-aos-delay="{{ $loop->index * 100 }}">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">
                            {{ Str::before($sub->name, ' - ') }}
                        </h3>

                        <div class="space-y-3 mb-6">
                            <div class="flex justify-between py-2 border-b">
                                <span class="text-gray-600">Plan:</span>
                                <span class="font-semibold">{{ Str::after($sub->name, ' - ') }}</span>
                            </div>
                            <div class="flex justify-between py-2 border-b">
                                <span class="text-gray-600">Monthly:</span>
                                <span
                                    class="text-2xl font-bold text-purple-600">£{{ number_format($sub->price, 2) }}</span>
                            </div>
                            <div class="flex justify-between py-2 border-b">
                                <span class="text-gray-600">Yearly:</span>
                                <span class="font-semibold">£{{ number_format($sub->price * 12, 2) }}</span>
                            </div>
                            <div class="flex justify-between py-2">
                                <span class="text-gray-600">Category:</span>
                                <span class="font-semibold">{{ $sub->category->name }}</span>
                            </div>
                        </div>

                        <a href="{{ route('subscriptions.show', $sub->slug) }}"
                           class="block bg-purple-600 text-white text-center px-6 py-3 rounded-full font-semibold hover:bg-purple-700 transition">
                            View Details
                        </a>
                    </div>
                @endforeach
            </div>

            <!-- Back Button -->
            <div class="mt-12 text-center">
                <a href="{{ route('subscriptions.index') }}"
                   class="inline-flex items-center text-purple-600 hover:text-purple-700 font-semibold text-lg">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Back to All Services
                </a>
            </div>
        </div>
    </section>
</x-layout>
