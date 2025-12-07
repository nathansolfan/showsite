<x-layout>

    {{-- Hero Section --}}
    <div class="bg-gradient-to-r from-blue-600 to-blue-700 text-white py-20">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h1 class="text-5xl font-bold mb-6">Move anything, anywhere</h1>
            <p class="text-xl mb-8 text-blue-100">Compare quotes from local transport providers. Save up to 75%.</p>
            <a href="/loadup/bookings/create"
               class="inline-block bg-white text-blue-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-colors">
                Get a Quote
            </a>
        </div>

    </div>

    {{-- Services Grid --}}
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold mb-10 text-center">What do you need to move?</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                {{-- Furniture --}}
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow">
                    <div class="text-5xl mb-4">🪑</div>
                    <h3 class="text-xl font-bold mb-2">Furniture Removal</h3>
                    <p class="text-gray-600 mb-4">Move furniture & appliances</p>
                    <a href="/loadup/bookings/create?service=furniture"
                       class="text-blue-600 font-semibold hover:underline">
                        Get Quote →
                    </a>
                </div>

                {{-- House Moving --}}
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow">
                    <div class="text-5xl mb-4">🏠</div>
                    <h3 class="text-xl font-bold mb-2">House Moving</h3>
                    <p class="text-gray-600 mb-4">Full house or flat moving</p>
                    <a href="/loadup/bookings/create?service=house"
                       class="text-blue-600 font-semibold hover:underline">
                        Get Quote →
                    </a>
                </div>

                {{-- Storage --}}
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow">
                    <div class="text-5xl mb-4">📦</div>
                    <h3 class="text-xl font-bold mb-2">Storage</h3>
                    <p class="text-gray-600 mb-4">Secure storage solutions</p>
                    <a href="/loadup/bookings/create?service=storage"
                       class="text-blue-600 font-semibold hover:underline">
                        Get Quote →
                    </a>
                </div>

                {{-- Other --}}
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow">
                    <div class="text-5xl mb-4">🚐</div>
                    <h3 class="text-xl font-bold mb-2">Other</h3>
                    <p class="text-gray-600 mb-4">Custom transport needs</p>
                    <a href="/loadup/bookings/create?service=other"
                       class="text-blue-600 font-semibold hover:underline">
                        Get Quote →
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- How it Works --}}
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold mb-10 text-center">How it works</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold text-blue-600">
                        1
                    </div>
                    <h3 class="text-xl font-bold mb-2">Tell us what you need</h3>
                    <p class="text-gray-600">Describe your item and pickup/delivery details</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold text-blue-600">
                        2
                    </div>
                    <h3 class="text-xl font-bold mb-2">Compare quotes</h3>
                    <p class="text-gray-600">Receive quotes from verified providers</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold text-blue-600">
                        3
                    </div>
                    <h3 class="text-xl font-bold mb-2">Book & relax</h3>
                    <p class="text-gray-600">Choose your provider and let them handle it</p>
                </div>
            </div>
        </div>
    </div>

</x-layout>
