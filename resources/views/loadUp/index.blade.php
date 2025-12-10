<x-layout>

    {{-- Hero Section --}}
    <section class="bg-blue-700 text-white py-24">
        <div class="px-6 text-center max-w-3xl mx-auto">
            <h1 class="text-5xl font-extrabold tracking-tight mb-6">
                Move anything, anywhere
            </h1>
            <p class="text-xl text-blue-100 mb-10">
                Compare quotes from local transport providers. Save up to 75%.
            </p>

            <a href="/loadup/bookings/create"
               class="inline-block bg-white text-blue-700 font-semibold
                      px-10 py-4 rounded-xl text-lg shadow-md
                      hover:bg-blue-50 transition">
                Get a Quote
            </a>
        </div>
    </section>

    {{-- Services --}}
    <section class="py-20 bg-blue-50 border-t border-blue-100">
        <div class="px-6 max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-14 tracking-tight">
                What do you need to move?
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                {{-- Furniture --}}
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition">
                    <div class="text-4xl mb-4">🪑</div>
                    <h3 class="text-xl font-semibold mb-2">Furniture Removal</h3>
                    <p class="text-gray-600 mb-6">Move furniture & appliances</p>
                    <a href="/loadup/bookings/create?service=furniture"
                       class="text-blue-700 font-medium hover:underline">
                        Get Quote →
                    </a>
                </div>

                {{-- House --}}
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition">
                    <div class="text-4xl mb-4">🏠</div>
                    <h3 class="text-xl font-semibold mb-2">House Moving</h3>
                    <p class="text-gray-600 mb-6">Full house or flat moving</p>
                    <a href="/loadup/bookings/create?service=house"
                       class="text-blue-700 font-medium hover:underline">
                        Get Quote →
                    </a>
                </div>

                {{-- Storage --}}
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition">
                    <div class="text-4xl mb-4">📦</div>
                    <h3 class="text-xl font-semibold mb-2">Storage</h3>
                    <p class="text-gray-600 mb-6">Secure storage solutions</p>
                    <a href="/loadup/bookings/create?service=storage"
                       class="text-blue-700 font-medium hover:underline">
                        Get Quote →
                    </a>
                </div>

                {{-- Other --}}
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition">
                    <div class="text-4xl mb-4">🚐</div>
                    <h3 class="text-xl font-semibold mb-2">Other</h3>
                    <p class="text-gray-600 mb-6">Custom transport needs</p>
                    <a href="/loadup/bookings/create?service=other"
                       class="text-blue-700 font-medium hover:underline">
                        Get Quote →
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- How it Works --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-16 tracking-tight">
                How it works
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">

                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-blue-700">1</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Tell us what you need</h3>
                    <p class="text-gray-600">
                        Describe your item and pickup/delivery details.
                    </p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-blue-700">2</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Compare quotes</h3>
                    <p class="text-gray-600">
                        Receive quotes from verified providers.
                    </p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-blue-700">3</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Book & relax</h3>
                    <p class="text-gray-600">
                        Choose your provider and let them handle the rest.
                    </p>
                </div>

            </div>
        </div>
    </section>

</x-layout>
