@php
    use App\Models\Visit;
@endphp
<x-layout>

    <x-slot:title>Visit Statistics Dashboard</x-slot:title>

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Visit Analytics Dashboard</h1>
            <div class="text-sm text-gray-500">Last updated: {{ now()->format('M d, Y H:i') }}</div>
        </div>

        <!-- Summary Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow p-6 border-t-4 border-blue-500">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-sm text-gray-500 uppercase">Total Visits</p>
                        <h2 class="text-4xl font-bold text-blue-600">{{ $totalVisits }}</h2>
                    </div>
                    <div class="bg-blue-100 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                </div>
                <div class="mt-2 text-sm text-gray-600">All time page views</div>
            </div>

            <div class="bg-white rounded-lg shadow p-6 border-t-4 border-green-500">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-sm text-gray-500 uppercase">Unique Visitors</p>
                        <h2 class="text-4xl font-bold text-green-600">{{ $uniqueIPs }}</h2>
                    </div>
                    <div class="bg-green-100 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                </div>
                <div class="mt-2 text-sm text-gray-600">Based on unique IP addresses</div>
            </div>

            <div class="bg-white rounded-lg shadow p-6 border-t-4 border-purple-500">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-sm text-gray-500 uppercase">Avg. Visit Duration</p>
                        <h2 class="text-4xl font-bold text-purple-600">--:--</h2>
                    </div>
                    <div class="bg-purple-100 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <div class="mt-2 text-sm text-gray-600">Enable session tracking for data</div>
            </div>

            <div class="bg-white rounded-lg shadow p-6 border-t-4 border-yellow-500">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-sm text-gray-500 uppercase">Today's Visits</p>
                        <h2 class="text-4xl font-bold text-yellow-600">
                            {{ Visit::whereDate('created_at', today())->count() }}
                        </h2>
                    </div>
                    <div class="bg-yellow-100 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
                <div class="mt-2 text-sm text-gray-600">{{ now()->format('F j, Y') }}</div>
            </div>
        </div>

        <!-- Traffic by Time Period -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-xl font-semibold mb-4">Traffic Overview</h3>
                <div class="border-t pt-4">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-sm font-medium">Last 24 hours</span>
                        <span class="text-sm font-bold">
                            {{ Visit::where('created_at', '>=', now()->subDay())->count() }}
                        </span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: {{ min(100, (Visit::where('created_at', '>=', now()->subDay())->count() / max(1, $totalVisits)) * 100) }}%"></div>
                    </div>
                </div>
                <div class="border-t pt-4 mt-4">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-sm font-medium">Last 7 days</span>
                        <span class="text-sm font-bold">
                            {{ Visit::where('created_at', '>=', now()->subDays(7))->count() }}
                        </span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-green-600 h-2.5 rounded-full" style="width: {{ min(100, (Visit::where('created_at', '>=', now()->subDays(7))->count() / max(1, $totalVisits)) * 100) }}%"></div>
                    </div>
                </div>
                <div class="border-t pt-4 mt-4">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-sm font-medium">Last 30 days</span>
                        <span class="text-sm font-bold">
                            {{ Visit::where('created_at', '>=', now()->subDays(30))->count() }}
                        </span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-purple-600 h-2.5 rounded-full" style="width: {{ min(100, (Visit::where('created_at', '>=', now()->subDays(30))->count() / max(1, $totalVisits)) * 100) }}%"></div>
                    </div>
                </div>
            </div>

            <!-- Popular Pages -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-xl font-semibold mb-4">Popular Pages</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="py-3 px-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Page</th>
                                <th class="py-3 px-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Visits</th>
                                <th class="py-3 px-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">%</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach($popularPages as $page)
                            <tr>
                                <td class="py-3 px-4 text-sm">
                                    <div class="font-medium text-gray-900 truncate max-w-xs">{{ $page->page }}</div>
                                </td>
                                <td class="py-3 px-4 text-sm text-gray-900">{{ $page->total }}</td>
                                <td class="py-3 px-4">
                                    <div class="flex items-center">
                                        <span class="text-sm text-gray-900 mr-2">{{ number_format(($page->total / $totalVisits) * 100, 1) }}%</span>
                                        <div class="w-16 bg-gray-200 rounded-full h-2">
                                            <div class="bg-blue-600 h-2 rounded-full" style="width: {{ ($page->total / $totalVisits) * 100 }}%"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Browser & Device Stats -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-xl font-semibold mb-4">Browser Statistics</h3>
                <div class="space-y-4">
                    @php
                        $browsers = [
                            'Chrome' => Visit::where('user_agent', 'like', '%Chrome%')->where('user_agent', 'not like', '%Edg%')->count(),
                            'Edge' => Visit::where('user_agent', 'like', '%Edg%')->count(),
                            'Firefox' => Visit::where('user_agent', 'like', '%Firefox%')->count(),
                            'Safari' => Visit::where('user_agent', 'like', '%Safari%')->where('user_agent', 'not like', '%Chrome%')->count(),
                            'Other' => Visit::whereNotIn('user_agent', ['%Chrome%', '%Edg%', '%Firefox%', '%Safari%'])->count()
                        ];
                    @endphp

                    @foreach($browsers as $browser => $count)
                        @if($count > 0)
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-sm font-medium text-gray-700">{{ $browser }}</span>
                                <span class="text-sm font-medium text-gray-700">{{ $count }} ({{ number_format(($count / $totalVisits) * 100, 1) }}%)</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="h-2.5 rounded-full
                                    {{ $browser == 'Chrome' ? 'bg-blue-600' :
                                      ($browser == 'Edge' ? 'bg-cyan-600' :
                                      ($browser == 'Firefox' ? 'bg-orange-600' :
                                      ($browser == 'Safari' ? 'bg-blue-400' : 'bg-gray-600'))) }}"
                                    style="width: {{ ($count / $totalVisits) * 100 }}%">
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-xl font-semibold mb-4">Device Type Estimates</h3>
                <div class="space-y-4">
                    @php
                        $devices = [
                            'Desktop' => Visit::where('user_agent', 'not like', '%Mobile%')->where('user_agent', 'not like', '%Android%')->where('user_agent', 'not like', '%iPhone%')->where('user_agent', 'not like', '%iPad%')->count(),
                            'Mobile' => Visit::where(function($query) {
                                $query->where('user_agent', 'like', '%Mobile%')
                                    ->orWhere('user_agent', 'like', '%Android%')
                                    ->orWhere('user_agent', 'like', '%iPhone%');
                            })->count(),
                            'Tablet' => Visit::where('user_agent', 'like', '%iPad%')->orWhere('user_agent', 'like', '%Tablet%')->count()
                        ];
                    @endphp

                    @foreach($devices as $device => $count)
                        @if($count > 0)
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-sm font-medium text-gray-700">{{ $device }}</span>
                                <span class="text-sm font-medium text-gray-700">{{ $count }} ({{ number_format(($count / $totalVisits) * 100, 1) }}%)</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="h-2.5 rounded-full
                                    {{ $device == 'Desktop' ? 'bg-indigo-600' :
                                      ($device == 'Mobile' ? 'bg-rose-600' : 'bg-amber-600') }}"
                                    style="width: {{ ($count / $totalVisits) * 100 }}%">
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Recent Visits Table -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold">Recent Visits</h3>
                <a href="#" class="text-blue-600 hover:text-blue-800 text-sm">Export Data</a>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Page</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">IP Address</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Browser</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date & Time</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($visits as $visit)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900 truncate max-w-xs">{{ $visit->page }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $visit->ip }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    @php
                                        $userAgent = $visit->user_agent;
                                        if (strpos($userAgent, 'Edg') !== false) {
                                            echo 'Edge';
                                        } elseif (strpos($userAgent, 'Chrome') !== false) {
                                            echo 'Chrome';
                                        } elseif (strpos($userAgent, 'Firefox') !== false) {
                                            echo 'Firefox';
                                        } elseif (strpos($userAgent, 'Safari') !== false) {
                                            echo 'Safari';
                                        } else {
                                            echo 'Other';
                                        }
                                    @endphp
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $visit->created_at->format('M d, Y H:i:s') }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $visits->links() }}
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        // You could add JavaScript charts here in the future
        console.log('Analytics dashboard loaded');
    </script>
    @endpush
</x-layout>
