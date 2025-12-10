<x-layout>

    {{-- Hero Section --}}
    <div class="bg-gray-50 text-gray-900 py-32 sm:py-40 border-b-8 border-orange-600/10">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h1 class="text-6xl sm:text-7xl font-bold mb-6 tracking-tight leading-tight">
                Reliable <span class="text-orange-700">2 Men & a Van</span> Services
            </h1>
            <p class="text-2xl sm:text-3xl mb-14 text-gray-700 font-medium">
                Professional, affordable and stress-free transport for all your needs.
            </p>
            <a href="/loadup/bookings/create"
               class="
               inline-block
               bg-orange-600 text-white
               px-14 py-5
               rounded-lg
               font-bold
               text-xl
               shadow-xl shadow-orange-500/30
               hover:bg-orange-700
               transition-all
               duration-300
               transform hover:-translate-y-0.5"
            >
                Book Now
            </a>
        </div>
    </div>


    {{-- Services Grid --}}
    <div class="py-24 bg-white">
        <div class="px-6 max-w-7xl mx-auto">
            <h2 class="text-4xl font-extrabold mb-16 text-center text-gray-900">
                What We Do
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 divide-x-2 divide-gray-200 border border-gray-200 rounded-xl overflow-hidden">

                {{-- Removals --}}
                <div class="text-center p-8 bg-white hover:bg-gray-50 transition-colors duration-200 group">
                    <div class="text-6xl mb-4 text-orange-600">📦</div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">Removals</h3>
                    <p class="mb-4 text-gray-600">Small removals, single items or full van loads.</p>
                    <a href="/loadup/removals"
                       class="text-orange-600 font-bold hover:text-orange-700 flex items-center justify-center pt-2">
                        Book Now
                        <span class="ml-2 transition-transform duration-300 group-hover:translate-x-1">→</span>
                    </a>
                </div>

                {{-- Recycling / Tip Runs --}}
                <div class="text-center p-8 bg-white hover:bg-gray-50 transition-colors duration-200 group">
                    <div class="text-6xl mb-4 text-orange-600">♻️</div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">Recycling Centre Runs</h3>
                    <p class="mb-4 text-gray-600">We collect unwanted items and take them to the recycling centre.</p>
                    <a href="/loadup/recycling"
                       class="text-orange-600 font-bold hover:text-orange-700 flex items-center justify-center pt-2">
                        Book Now
                        <span class="ml-2 transition-transform duration-300 group-hover:translate-x-1">→</span>
                    </a>
                </div>

                {{-- Small Moves --}}
                <div class="text-center p-8 bg-white hover:bg-gray-50 transition-colors duration-200 group">
                    <div class="text-6xl mb-4 text-orange-600">🚚</div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">Small Moves</h3>
                    <p class="mb-4 text-gray-600">Ideal for students, single-room moves and partial relocations.</p>
                    <a href="/loadup/small-moves"
                       class="text-orange-600 font-bold hover:text-orange-700 flex items-center justify-center pt-2">
                        Book Now
                        <span class="ml-2 transition-transform duration-300 group-hover:translate-x-1">→</span>
                    </a>
                </div>

                {{-- Extra Services --}}
                <div class="text-center p-8 bg-white hover:bg-gray-50 transition-colors duration-200 group">
                    <div class="text-6xl mb-4 text-orange-600">🔧</div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900">Additional Services</h3>
                    <p class="mb-4 text-gray-600">Furniture assembly, pickups, deliveries & more.</p>
                    <a href="/loadup/additional"
                       class="text-orange-600 font-bold hover:text-orange-700 flex items-center justify-center pt-2">
                        Book Now
                        <span class="ml-2 transition-transform duration-300 group-hover:translate-x-1">→</span>
                    </a>
                </div>

            </div>
        </div>
    </div>


    {{-- How it Works --}}
    <div class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-extrabold mb-16 text-center text-gray-900">
                How It Works
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                <div class="relative pt-12">
                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-14 h-14 rounded-full bg-orange-600 flex items-center justify-center text-white text-3xl font-extrabold shadow-lg">1</div>
                    <div class="bg-white p-8 rounded-xl shadow-xl border-t-4 border-orange-600 hover:shadow-2xl">
                        <h3 class="text-2xl font-bold mb-3 text-gray-900 mt-2">Tell Us What You Need</h3>
                        <p class="text-gray-600">Describe your task—removal, recycling run, delivery or small move.</p>
                    </div>
                </div>

                <div class="relative pt-12">
                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-14 h-14 rounded-full bg-orange-600 flex items-center justify-center text-white text-3xl font-extrabold shadow-lg">2</div>
                    <div class="bg-white p-8 rounded-xl shadow-xl border-t-4 border-orange-600 hover:shadow-2xl">
                        <h3 class="text-2xl font-bold mb-3 text-gray-900 mt-2">We Confirm & Arrive</h3>
                        <p class="text-gray-600">Fast, reliable scheduling with professional 2-man teams.</p>
                    </div>
                </div>

                <div class="relative pt-12">
                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-14 h-14 rounded-full bg-orange-600 flex items-center justify-center text-white text-3xl font-extrabold shadow-lg">3</div>
                    <div class="bg-white p-8 rounded-xl shadow-xl border-t-4 border-orange-600 hover:shadow-2xl">
                        <h3 class="text-2xl font-bold mb-3 text-gray-900 mt-2">Job Done — Stress Free</h3>
                        <p class="text-gray-600">We handle loading, transport and unloading with care.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-layout>
