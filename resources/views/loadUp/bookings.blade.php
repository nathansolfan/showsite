<x-layout>
    <div class="min-h-screen bg-gradient-to-br from-orange-50 via-white to-orange-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">

            {{-- Header --}}
            <div class="mb-12">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-5xl font-bold text-gray-900 mb-2">My Bookings</h1>
                        <p class="text-gray-600 text-lg">View and manage your service bookings</p>
                    </div>
                    <a href="/loadup"
                       class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-3 rounded-xl font-semibold shadow-lg transition-all duration-200">
                        + New Booking
                    </a>
                </div>
            </div>

            {{-- Bookings List --}}
            <div class="grid gap-6">
                @forelse($bookings as $booking)
                    <div
                        class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-200">

                        {{-- Status Bar --}}
                        <div class="h-2
                            @if($booking->status === 'pending') bg-yellow-500
                            @elseif($booking->status === 'quoted') bg-blue-500
                            @elseif($booking->status === 'accepted') bg-green-500
                            @elseif($booking->status === 'in_progress') bg-purple-500
                            @elseif($booking->status === 'completed') bg-green-600
                            @elseif($booking->status === 'cancelled') bg-red-500
                            @else bg-gray-500 @endif">
                        </div>

                        <div class="p-8">
                            <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-6">

                                {{-- Left Side: Service Info --}}
                                <div class="flex items-start gap-4 flex-1">
                                    <div
                                        class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                        <span class="text-2xl">{{ $booking->service->icon ?? '📦' }}</span>
                                    </div>

                                    <div class="flex-1">
                                        <h3 class="text-2xl font-bold text-gray-900 mb-2">
                                            {{ $booking->service->name }}
                                        </h3>

                                        <div class="space-y-2 text-gray-600">
                                            <div class="flex items-start gap-2">
                                                <span class="font-semibold min-w-[100px]">Pickup:</span>
                                                <span>{{ $booking->pickup_address }}, {{ $booking->pickup_postcode }}</span>
                                            </div>

                                            @if($booking->delivery_address)
                                                <div class="flex items-start gap-2">
                                                    <span class="font-semibold min-w-[100px]">Delivery:</span>
                                                    <span>{{ $booking->delivery_address }}</span>
                                                </div>
                                            @endif

                                            <div class="flex items-center gap-2">
                                                <span class="font-semibold min-w-[100px]">Date:</span>
                                                <span>{{ $booking->pickup_date->format('l, d F Y') }}</span>
                                            </div>


                                            @if(auth()->check() && auth()->user()->id === 1 )
                                                <div class="flex items-center gap-2">
                                                    <span class="font-semibold min-w-[100px]">Booking ID:</span>
                                                    <span class="text-sm text-gray-500">#{{ $booking->id }}</span>
                                                </div>

                                            @endif

                                        </div>

                                        {{-- Extra Fields Preview --}}
                                        @if($booking->extra_fields && count($booking->extra_fields) > 0)
                                            <div class="mt-4 flex flex-wrap gap-2">
                                                @foreach(array_slice($booking->extra_fields, 0, 3) as $key => $value)
                                                    <span
                                                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-800">
                                                        {{ ucwords(str_replace('_', ' ', $key)) }}: {{ is_array($value) ? 'Multiple' : ucwords(str_replace('_', ' ', $value)) }}
                                                    </span>
                                                @endforeach
                                                @if(count($booking->extra_fields) > 3)
                                                    <span
                                                        class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600">
                                                        +{{ count($booking->extra_fields) - 3 }} more
                                                    </span>
                                                @endif
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                {{-- Right Side: Status & Actions --}}
                                <div class="flex flex-col items-end gap-4 md:min-w-[200px]">
                                    <span class="px-4 py-2 rounded-full text-sm font-bold whitespace-nowrap
                                        @if($booking->status === 'pending') bg-yellow-100 text-yellow-800
                                        @elseif($booking->status === 'quoted') bg-blue-100 text-blue-800
                                        @elseif($booking->status === 'accepted') bg-green-100 text-green-800
                                        @elseif($booking->status === 'in_progress') bg-purple-100 text-purple-800
                                        @elseif($booking->status === 'completed') bg-green-100 text-green-800
                                        @elseif($booking->status === 'cancelled') bg-red-100 text-red-800
                                        @else bg-gray-100 text-gray-800 @endif">
                                        {{ ucfirst($booking->status) }}
                                    </span>

                                    <a href="/loadup/show/{{ $booking->id }}"
                                       class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-2 rounded-xl font-semibold shadow-lg transition-all duration-200 whitespace-nowrap">
                                        View Details →
                                    </a>

                                    <p class="text-xs text-gray-500">
                                        Created {{ $booking->created_at->diffForHumans() }}
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                @empty
                    {{-- Empty State --}}
                    <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-16 text-center">
                        <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-5xl">📦</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">No bookings yet</h3>
                        <p class="text-gray-600 mb-8">Start by creating your first booking</p>
                        <a href="/loadup"
                           class="inline-block bg-orange-600 hover:bg-orange-700 text-white px-8 py-3 rounded-xl font-semibold shadow-lg transition-all duration-200">
                            Create First Booking
                        </a>
                    </div>
                @endforelse
            </div>

            {{-- Stats Summary (optional) --}}
            @if($bookings->count() > 0)
                <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-xl shadow-lg p-6 text-center">
                        <p class="text-3xl font-bold text-orange-600">{{ $bookings->count() }}</p>
                        <p class="text-gray-600 font-semibold">Total Bookings</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-lg p-6 text-center">
                        <p class="text-3xl font-bold text-green-600">{{ $bookings->where('status', 'completed')->count() }}</p>
                        <p class="text-gray-600 font-semibold">Completed</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-lg p-6 text-center">
                        <p class="text-3xl font-bold text-yellow-600">{{ $bookings->where('status', 'pending')->count() }}</p>
                        <p class="text-gray-600 font-semibold">Pending</p>
                    </div>
                </div>
            @endif

        </div>
    </div>
</x-layout>
