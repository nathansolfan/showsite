<x-layout>
    <div class="min-h-screen bg-gradient-to-br from-orange-50 via-white to-orange-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">

            {{-- Header --}}
            <div class="mb-8">
                <a href="{{ route('user.bookings') }}"
                   class="inline-flex items-center text-orange-600 hover:text-orange-700 font-semibold mb-4">
                    ← Back to My Bookings
                </a>
                <div class="flex items-center justify-between">
                    <h1 class="text-4xl font-bold text-gray-900">Booking Details</h1>
                    <span class="px-4 py-2 rounded-full text-sm font-bold
                        @if($booking->status === 'pending') bg-yellow-100 text-yellow-800
                        @elseif($booking->status === 'quoted') bg-blue-100 text-blue-800
                        @elseif($booking->status === 'accepted') bg-green-100 text-green-800
                        @elseif($booking->status === 'in_progress') bg-purple-100 text-purple-800
                        @elseif($booking->status === 'completed') bg-green-100 text-green-800
                        @elseif($booking->status === 'cancelled') bg-red-100 text-red-800
                        @else bg-gray-100 text-gray-800 @endif">
                        {{ ucfirst($booking->status) }}
                    </span>
                </div>
            </div>

            {{-- Main Card --}}
            <div class="bg-white rounded-3xl shadow-2xl border border-gray-100 overflow-hidden">

                {{-- Decorative bar --}}
                <div class="h-2 bg-gradient-to-r from-orange-500 via-orange-600 to-orange-500"></div>

                <div class="p-8 sm:p-12">

                    {{-- Service Info --}}
                    <div class="mb-10">
                        <div class="flex items-center gap-4 mb-6">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center">
                                <span class="text-3xl">{{ $booking->service->icon ?? '📦' }}</span>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold text-gray-900">{{ $booking->service->name }}</h2>
                                <p class="text-gray-500">Booking #{{ $booking->id }}</p>
                            </div>
                        </div>
                    </div>

                    {{-- Divider --}}
                    <div class="relative mb-10">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t-2 border-gray-200"></div>
                        </div>
                    </div>

                    {{-- Pickup Details --}}
                    <div class="mb-10">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Pickup Details</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-gray-50 rounded-xl p-4">
                                <p class="text-sm font-semibold text-gray-600 mb-1">Address</p>
                                <p class="text-gray-900">{{ $booking->pickup_address }}</p>
                            </div>
                            <div class="bg-gray-50 rounded-xl p-4">
                                <p class="text-sm font-semibold text-gray-600 mb-1">Postcode</p>
                                <p class="text-gray-900">{{ $booking->pickup_postcode }}</p>
                            </div>
                            <div class="bg-gray-50 rounded-xl p-4">
                                <p class="text-sm font-semibold text-gray-600 mb-1">Date</p>
                                <p class="text-gray-900">{{ $booking->pickup_date->format('l, d F Y') }}</p>
                            </div>
                        </div>
                    </div>

                    {{-- Delivery Details (if exists) --}}
                    @if($booking->delivery_address)
                        <div class="mb-10">
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Delivery Details</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="bg-gray-50 rounded-xl p-4">
                                    <p class="text-sm font-semibold text-gray-600 mb-1">Address</p>
                                    <p class="text-gray-900">{{ $booking->delivery_address }}</p>
                                </div>
                                @if($booking->delivery_postcode)
                                    <div class="bg-gray-50 rounded-xl p-4">
                                        <p class="text-sm font-semibold text-gray-600 mb-1">Postcode</p>
                                        <p class="text-gray-900">{{ $booking->delivery_postcode }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif

                    {{-- Item Description --}}
                    @if($booking->item_description)
                        <div class="mb-10">
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Item Description</h3>
                            <div class="bg-gray-50 rounded-xl p-4">
                                <p class="text-gray-900 whitespace-pre-wrap">{{ $booking->item_description }}</p>
                            </div>
                        </div>
                    @endif

                    {{-- Extra Fields --}}
                    @if($booking->extra_fields && count($booking->extra_fields) > 0)
                        <div class="mb-10">
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Additional Information</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                @foreach($booking->extra_fields as $key => $value)
                                    <div class="bg-gray-50 rounded-xl p-4">
                                        <p class="text-sm font-semibold text-gray-600 mb-1">{{ ucwords(str_replace('_', ' ', $key)) }}</p>
                                        <p class="text-gray-900">{{ is_array($value) ? json_encode($value) : ucwords(str_replace('_', ' ', $value)) }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    {{-- Notes --}}
                    @if($booking->notes)
                        <div class="mb-10">
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Notes</h3>
                            <div class="bg-gray-50 rounded-xl p-4">
                                <p class="text-gray-900 whitespace-pre-wrap">{{ $booking->notes }}</p>
                            </div>
                        </div>
                    @endif

                    {{-- Timestamps --}}
                    <div class="pt-6 border-t-2 border-gray-100">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-500">
                            <div>
                                <span
                                    class="font-semibold">Created:</span> {{ $booking->created_at->format('d M Y, H:i') }}
                            </div>
                            <div>
                                <span
                                    class="font-semibold">Last Updated:</span> {{ $booking->updated_at->format('d M Y, H:i') }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Actions --}}
            <div class="mt-8 flex gap-4 justify-center">
                @if($booking->status === 'pending')
                    <button
                        class="bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-xl font-semibold shadow-lg transition-all duration-200">
                        Cancel Booking
                    </button>
                @endif

                <a href="{{ route('user.bookings') }}"
                   class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-8 py-3 rounded-xl font-semibold shadow-lg transition-all duration-200">
                    Back to List
                </a>
            </div>

        </div>
    </div>
</x-layout>
