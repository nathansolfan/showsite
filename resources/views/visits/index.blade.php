<x-layout>
    <x-slot:title>Visit Statistics</x-slot:title>

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Visit Statistics</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow p-6">
                <h5 class="text-xl font-semibold mb-2">Total Visits</h5>
                <h2 class="text-4xl font-bold text-blue-600">{{ $totalVisits }}</h2>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <h5 class="text-xl font-semibold mb-2">Unique Visitors</h5>
                <h2 class="text-4xl font-bold text-green-600">{{ $uniqueIPs }}</h2>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6 mb-8">
            <h3 class="text-2xl font-semibold mb-4">Popular Pages</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-3 px-4 text-left">Page</th>
                            <th class="py-3 px-4 text-left">Visits</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($popularPages as $page)
                        <tr class="border-t">
                            <td class="py-3 px-4">{{ $page->page }}</td>
                            <td class="py-3 px-4">{{ $page->total }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-2xl font-semibold mb-4">Recent Visits</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-3 px-4 text-left">Page</th>
                            <th class="py-3 px-4 text-left">IP</th>
                            <th class="py-3 px-4 text-left">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($visits as $visit)
                        <tr class="border-t">
                            <td class="py-3 px-4">{{ $visit->page }}</td>
                            <td class="py-3 px-4">{{ $visit->ip }}</td>
                            <td class="py-3 px-4">{{ $visit->created_at->format('M d, Y H:i') }}</td>
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
</x-layout>
