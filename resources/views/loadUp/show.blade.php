<x-layout>
    <div
        class="min-h-screen bg-gradient-to-br from-orange-50 via-amber-50 to-orange-100 py-16 px-4 sm:px-6 lg:px-8 relative overflow-hidden">

        {{-- Animated Background Shapes --}}
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div
                class="absolute -top-40 -right-40 w-96 h-96 bg-orange-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
            <div
                class="absolute -bottom-40 -left-40 w-96 h-96 bg-amber-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
        </div>

        <style>
            @keyframes blob {
                0%, 100% {
                    transform: translate(0, 0) scale(1);
                }
                25% {
                    transform: translate(20px, -50px) scale(1.1);
                }
                50% {
                    transform: translate(-20px, 20px) scale(0.9);
                }
                75% {
                    transform: translate(50px, 50px) scale(1.05);
                }
            }

            .animate-blob {
                animation: blob 15s infinite;
            }

            .animation-delay-2000 {
                animation-delay: 2s;
            }
        </style>

        <div class="max-w-5xl mx-auto relative z-10">

            {{-- Back Button --}}
            <a href=""
               class="inline-flex items-center gap-2 text-orange-700 hover:text-orange-800 font-semibold mb-8 group transition-all duration-200">
                <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform duration-200" fill="none"
                     stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Back to My Bookings
            </a>

            {{-- Header with Status --}}
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 mb-10">
                <div>
                    <h1 class="text-5xl font-black text-gray-900 mb-2">Booking Details</h1>
                    <p class="text-gray-600 text-lg">Order #{{ $booking->id }}</p>
                </div>

                @if( auth()->check() && auth()->user()->id === 1 )

                    <span class="inline-flex items-center gap-2 px-6 py-3 rounded-2xl text-lg font-bold shadow-lg">

                        <form action="/user/{{$booking->id}}/change-status" method="post">
                            @csrf

                            <select name="status">
                                <option
                                    value="pending" {{ $booking->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="quoted">Quoted</option>
                                <option value="accepted">Accepted</option>
                                <option value="in_progress">In Progress</option>
                                <option value="completed">Completed</option>
                                <option value="cancelled">Cancelled</option>
                            </select>

                            <button
                                type="submit"
                                class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-xl font-semibold transition-all duration-200">
                                Update
                            </button>
                        </form>
                    </span>
                @endif


                <span class="inline-flex items-center gap-2 px-6 py-3 rounded-2xl text-lg font-bold shadow-lg
                    @if($booking->status === 'pending') bg-yellow-100 text-yellow-800 border-2 border-yellow-200
                    @elseif($booking->status === 'quoted') bg-blue-100 text-blue-800 border-2 border-blue-200
                    @elseif($booking->status === 'accepted') bg-green-100 text-green-800 border-2 border-green-200
                    @elseif($booking->status === 'in_progress') bg-purple-100 text-purple-800 border-2 border-purple-200
                    @elseif($booking->status === 'completed') bg-green-100 text-green-800 border-2 border-green-200
                    @elseif($booking->status === 'cancelled') bg-red-100 text-red-800 border-2 border-red-200
                    @else bg-gray-100 text-gray-800 border-2 border-gray-200 @endif">

                        <span class="w-3 h-3 rounded-full
                        @if($booking->status === 'pending') bg-yellow-500 animate-pulse
                        @elseif($booking->status === 'in_progress') bg-purple-500 animate-pulse
                        @elseif($booking->status === 'completed') bg-green-500
                        @else bg-gray-400 @endif">
                    </span>



                    {{ ucfirst($booking->status) }}
                </span>


            </div>

            {{-- Main Card --}}
            <div
                class="bg-white/80 backdrop-blur-xl rounded-[2rem] shadow-2xl border border-white/50 overflow-hidden mb-8">

                {{-- Decorative bar --}}
                <div class="h-3 bg-gradient-to-r from-orange-400 via-orange-600 to-orange-400"></div>

                <div class="p-10 sm:p-14">

                    {{-- Service Info --}}
                    <div class="mb-12">
                        <div
                            class="flex items-center gap-5 p-6 bg-gradient-to-r from-orange-50 to-amber-50 rounded-2xl border-2 border-orange-100">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center shadow-lg flex-shrink-0">
                                <span class="text-4xl">{{ $booking->service->icon ?? '📦' }}</span>
                            </div>
                            <div>
                                <h2 class="text-3xl font-bold text-gray-900 mb-1">{{ $booking->service->name }}</h2>
                                <p class="text-gray-600 font-medium">
                                    Booked {{ $booking->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </div>

                    {{-- Pickup Details --}}
                    <div class="mb-12">
                        <div class="flex items-center gap-3 mb-6">
                            <div
                                class="w-12 h-12 rounded-2xl bg-gradient-to-br from-orange-100 to-orange-200 flex items-center justify-center">
                                <span class="text-2xl">📍</span>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Pickup Details</h3>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div
                                class="bg-gradient-to-br from-gray-50 to-gray-100/50 rounded-2xl p-6 border-2 border-gray-100">
                                <p class="text-sm font-bold text-gray-500 mb-2 uppercase tracking-wide">Address</p>
                                <p class="text-lg font-semibold text-gray-900">{{ $booking->pickup_address }}</p>
                            </div>
                            <div
                                class="bg-gradient-to-br from-gray-50 to-gray-100/50 rounded-2xl p-6 border-2 border-gray-100">
                                <p class="text-sm font-bold text-gray-500 mb-2 uppercase tracking-wide">Postcode</p>
                                <p class="text-lg font-semibold text-gray-900">{{ $booking->pickup_postcode }}</p>
                            </div>
                            <div
                                class="bg-gradient-to-br from-gray-50 to-gray-100/50 rounded-2xl p-6 border-2 border-gray-100 md:col-span-2">
                                <p class="text-sm font-bold text-gray-500 mb-2 uppercase tracking-wide">Scheduled
                                    Date</p>
                                <p class="text-lg font-semibold text-gray-900">{{ $booking->pickup_date->format('l, d F Y') }}</p>
                            </div>
                        </div>
                    </div>

                    {{-- Delivery Details (if exists) --}}
                    @if($booking->delivery_address)
                        <div class="mb-12">
                            <div class="flex items-center gap-3 mb-6">
                                <div
                                    class="w-12 h-12 rounded-2xl bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center">
                                    <span class="text-2xl">🎯</span>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900">Delivery Details</h3>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div
                                    class="bg-gradient-to-br from-gray-50 to-gray-100/50 rounded-2xl p-6 border-2 border-gray-100">
                                    <p class="text-sm font-bold text-gray-500 mb-2 uppercase tracking-wide">Address</p>
                                    <p class="text-lg font-semibold text-gray-900">{{ $booking->delivery_address }}</p>
                                </div>
                                @if($booking->delivery_postcode)
                                    <div
                                        class="bg-gradient-to-br from-gray-50 to-gray-100/50 rounded-2xl p-6 border-2 border-gray-100">
                                        <p class="text-sm font-bold text-gray-500 mb-2 uppercase tracking-wide">
                                            Postcode</p>
                                        <p class="text-lg font-semibold text-gray-900">{{ $booking->delivery_postcode }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif

                    {{-- Item Description --}}
                    @if($booking->item_description)
                        <div class="mb-12">
                            <div class="flex items-center gap-3 mb-6">
                                <div
                                    class="w-12 h-12 rounded-2xl bg-gradient-to-br from-purple-100 to-purple-200 flex items-center justify-center">
                                    <span class="text-2xl">📝</span>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900">Item Description</h3>
                            </div>
                            <div
                                class="bg-gradient-to-br from-gray-50 to-gray-100/50 rounded-2xl p-6 border-2 border-gray-100">
                                <p class="text-lg text-gray-900 whitespace-pre-wrap leading-relaxed">{{ $booking->item_description }}</p>
                            </div>
                        </div>
                    @endif

                    {{-- Extra Fields --}}
                    @if($booking->extra_fields && count($booking->extra_fields) > 0)
                        <div class="mb-12">
                            <div class="flex items-center gap-3 mb-6">
                                <div
                                    class="w-12 h-12 rounded-2xl bg-gradient-to-br from-green-100 to-green-200 flex items-center justify-center">
                                    <span class="text-2xl">✨</span>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900">Additional Information</h3>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                @foreach($booking->extra_fields as $key => $value)
                                    <div
                                        class="bg-gradient-to-br from-gray-50 to-gray-100/50 rounded-2xl p-6 border-2 border-gray-100">
                                        <p class="text-sm font-bold text-gray-500 mb-2 uppercase tracking-wide">{{ ucwords(str_replace('_', ' ', $key)) }}</p>
                                        <p class="text-lg font-semibold text-gray-900">{{ is_array($value) ? json_encode($value) : ucwords(str_replace('_', ' ', $value)) }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    {{-- Notes --}}
                    @if($booking->notes)
                        <div class="mb-12">
                            <div class="flex items-center gap-3 mb-6">
                                <div
                                    class="w-12 h-12 rounded-2xl bg-gradient-to-br from-amber-100 to-amber-200 flex items-center justify-center">
                                    <span class="text-2xl">💬</span>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900">Notes</h3>
                            </div>
                            <div
                                class="bg-gradient-to-br from-amber-50 to-amber-100/50 rounded-2xl p-6 border-2 border-amber-200">
                                <p class="text-lg text-gray-900 whitespace-pre-wrap leading-relaxed">{{ $booking->notes }}</p>
                            </div>
                        </div>
                    @endif

                    {{-- Timestamps --}}
                    <div class="pt-8 border-t-2 border-dashed border-gray-200">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="flex items-center gap-3">
                                <span class="text-2xl">📅</span>
                                <div>
                                    <p class="text-sm font-bold text-gray-500 uppercase tracking-wide">Created</p>
                                    <p class="text-base font-semibold text-gray-900">{{ $booking->created_at->format('d M Y, H:i') }}</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-2xl">🔄</span>
                                <div>
                                    <p class="text-sm font-bold text-gray-500 uppercase tracking-wide">Last Updated</p>
                                    <p class="text-base font-semibold text-gray-900">{{ $booking->updated_at->format('d M Y, H:i') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Actions --}}
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                @if($booking->status === 'pending')
                    <button
                        class="group relative px-8 py-4 bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white rounded-2xl font-bold text-lg shadow-xl shadow-red-500/30 transition-all duration-300 transform hover:-translate-y-1">
                        <span class="flex items-center justify-center gap-2">
                            <span>❌</span>
                            Cancel Booking
                        </span>
                    </button>
                @endif

                <a href=""
                   class="group relative px-8 py-4 bg-gradient-to-r from-gray-200 to-gray-300 hover:from-gray-300 hover:to-gray-400 text-gray-800 rounded-2xl font-bold text-lg shadow-xl transition-all duration-300 transform hover:-translate-y-1 text-center">
                    <span class="flex items-center justify-center gap-2">
                        <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform duration-200" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                        Back to List
                    </span>
                </a>

                <a href="/loadup"
                   class="group relative px-8 py-4 bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white rounded-2xl font-bold text-lg shadow-xl shadow-orange-500/30 transition-all duration-300 transform hover:-translate-y-1 text-center">
                    <span class="flex items-center justify-center gap-2">
                        <span>📦</span>
                        New Booking
                    </span>
                </a>
            </div>

        </div>
    </div>
</x-layout>
