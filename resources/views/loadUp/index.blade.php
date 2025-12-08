<x-layout>



        {{-- Hero Section --}}

        <div class="bg-gradient-to-r from-blue-600 to-blue-700 text-white py-20">
            <div class="px-6 text-center">
                <h1 class="text-5xl font-bold mb-6" >Move anything, anywhere</h1>
                <p class="text-xl mb-8" >Compare quotes from local transport providers. Save up to 75%.</p>
                <a href="/loadup/bookings/create"
                   class="inline-block bg-white text-blue-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-colors">

                    Get a Quote</a>
            </div>

        </div>



        {{-- Services Grid --}}
        <div class="py-16 ">
            <div class="  ">
                <h2 class="text-3xl font-bold mb-10 text-center" >What do you need to move?</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 ">
                    {{-- Furniture --}}
                    <div class="bg-white p-6 rounded shadow-md hover:shadow-xl transition-shadow">
                        <div class="text-5xl  mb-2 text-center">🪑</div>
                        <h3 class="text-xl font-bold mb-2">Furniture Removal</h3>
                        <p class="mb-4">Move furniture & appliances</p>
                        <a
                            href="/loadup/bookings/create?service=furniture"
                            class="text-blue-600 font-semibold hover:underline"
                        >
                            Get Quote →
                        </a>
                    </div>

                    {{-- House Moving --}}
                    <div class="bg-white p-6 rounded shadow-md">
                        <div class="service-icon">🏠</div>
                        <h3>House Moving</h3>
                        <p>Full house or flat moving</p>
                        <a href="/loadup/bookings/create?service=house">
                            Get Quote →
                        </a>
                    </div>

                    {{-- Storage --}}
                    <div class="service-card">
                        <div class="service-icon">📦</div>
                        <h3>Storage</h3>
                        <p>Secure storage solutions</p>
                        <a href="/loadup/bookings/create?service=storage">
                            Get Quote →
                        </a>
                    </div>

                    {{-- Other --}}
                    <div class="service-card">
                        <div class="service-icon">🚐</div>
                        <h3>Other</h3>
                        <p>Custom transport needs</p>
                        <a href="/loadup/bookings/create?service=other">
                            Get Quote →
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- How it Works --}}
        <div class="how-it-works-section  p-8 mt-4">
            <div class="container">
                <h2>How it works</h2>

                <div class="steps-grid">
                    <div class="step">
                        <div class="step-number">1</div>
                        <h3>Tell us what you need</h3>
                        <p>Describe your item and pickup/delivery details</p>
                    </div>

                    <div class="step">
                        <div class="step-number">2</div>
                        <h3>Compare quotes</h3>
                        <p>Receive quotes from verified providers</p>
                    </div>

                    <div class="step">
                        <div class="step-number">3</div>
                        <h3>Book & relax</h3>
                        <p>Choose your provider and let them handle it</p>
                    </div>
                </div>
            </div>
        </div>



</x-layout>
