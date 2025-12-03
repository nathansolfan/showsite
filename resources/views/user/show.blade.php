<x-layout>
    <div class="min-h-screen bg-gray-50">

        {{-- Navigation Bar --}}
        <div class="bg-white border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-6 py-4">
                <a href="/user" class="inline-flex items-center text-sm text-gray-600 hover:text-gray-900 font-medium">
                    ← Back to Users
                </a>
            </div>
        </div>

        {{-- Main Content --}}
        <div class="max-w-7xl mx-auto px-6 py-8">

            {{-- Profile Header --}}
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-6">
                <div class="p-8">
                    <div class="flex items-start justify-between">
                        <div class="flex items-center gap-6">
                            {{-- Avatar --}}
                            <div class="relative">
                                <div class="w-20 h-20 bg-blue-600 rounded-lg flex items-center justify-center">
                                    <span class="text-white text-2xl font-semibold">
                                        {{ strtoupper(substr($user->name, 0, 2)) }}
                                    </span>
                                </div>
                                <div class="absolute bottom-0 right-0 w-4 h-4 bg-green-500 border-2 border-white rounded-full"></div>
                            </div>

                            {{-- User Info --}}
                            <div>
                                <h1 class="text-2xl font-semibold text-gray-900 mb-1">
                                    {{ $user->name }}
                                </h1>
                                <p class="text-gray-600 mb-2">{{ $user->email }}</p>
                                <div class="flex items-center gap-4 text-sm">
                                    <span class="px-2.5 py-0.5 bg-blue-50 text-blue-700 rounded font-medium">
                                        ID: {{ $user->id }}
                                    </span>
                                    @if($user->is_admin)
                                        <span class="px-2.5 py-0.5 bg-orange-50 text-orange-700 rounded font-medium">
                                            Administrator
                                        </span>
                                    @else
                                        <span class="px-2.5 py-0.5 bg-gray-100 text-gray-700 rounded font-medium">
                                            User
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        {{-- Edit Button --}}
                        @if(auth()->id() === $user->id)
                            <a href="/user/{{ $user->id }}/edit"
                               class="px-5 py-2.5 bg-gray-900 text-white text-sm font-medium rounded-lg hover:bg-gray-800 transition-colors">
                                Edit Profile
                            </a>
                        @endif
                    </div>
                </div>
            </div>

            {{-- Statistics Cards (Full Width) --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-5">
                    <p class="text-sm font-medium text-gray-600 mb-1">Total Projects</p>
                    <p class="text-3xl font-semibold text-gray-900">0</p>
                </div>

                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-5">
                    <p class="text-sm font-medium text-gray-600 mb-1">Member Since</p>
                    <p class="text-3xl font-semibold text-gray-900">{{ $user->created_at->diffInDays(now()) }}</p>
                    <p class="text-xs text-gray-500 mt-1">days</p>
                </div>

                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-5">
                    <p class="text-sm font-medium text-gray-600 mb-1">Last Active</p>
                    <p class="text-sm font-semibold text-gray-900">{{ $user->updated_at->diffForHumans() }}</p>
                </div>
            </div>

            {{-- Two Equal Columns --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                {{-- Left Column: Account Information --}}
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 flex flex-col">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h2 class="text-lg font-semibold text-gray-900">Account Information</h2>
                    </div>
                    <div class="p-6 flex-1">
                        <dl class="grid grid-cols-1 gap-y-5">
                            <div>
                                <dt class="text-sm font-medium text-gray-500">User ID</dt>
                                <dd class="mt-1 text-sm text-gray-900">#{{ $user->id }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Email Address</dt>
                                <dd class="mt-1 text-sm text-gray-900">{{ $user->email }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Registration Date</dt>
                                <dd class="mt-1 text-sm text-gray-900">{{ $user->created_at->format('F d, Y') }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Last Updated</dt>
                                <dd class="mt-1 text-sm text-gray-900">{{ $user->updated_at->format('F d, Y') }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Account Status</dt>
                                <dd class="mt-1">
                                    <span class="inline-flex items-center gap-1.5 text-sm text-green-700">
                                        <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                                        Active
                                    </span>
                                </dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Role</dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $user->is_admin ? 'Administrator' : 'Standard User' }}
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>

                {{-- Right Column: Actions & Activity --}}
                <div class="space-y-6">

                    {{-- Quick Actions --}}
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-gray-900">Quick Actions</h2>
                        </div>
                        <div class="p-4 space-y-2">
                            <a href="/blog?user={{ $user->id }}"
                               class="flex items-center justify-between px-4 py-3 text-sm font-medium text-gray-700 hover:bg-gray-50 rounded-lg transition-colors">
                                <span>View Projects</span>
                                <span class="text-gray-400">→</span>
                            </a>

                            @if(auth()->id() === $user->id)
                                <a href="/blog/create"
                                   class="flex items-center justify-between px-4 py-3 text-sm font-medium text-gray-700 hover:bg-gray-50 rounded-lg transition-colors">
                                    <span>Create Project</span>
                                    <span class="text-gray-400">→</span>
                                </a>
                            @endif

                            <button class="w-full flex items-center justify-between px-4 py-3 text-sm font-medium text-gray-700 hover:bg-gray-50 rounded-lg transition-colors">
                                <span>Share Profile</span>
                                <span class="text-gray-400">→</span>
                            </button>
                        </div>
                    </div>

                    {{-- Activity Summary --}}
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-gray-900">Activity</h2>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-gray-600">Projects</span>
                                    <span class="font-medium text-gray-900">0</span>
                                </div>
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-gray-600">Comments</span>
                                    <span class="font-medium text-gray-900">0</span>
                                </div>
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-gray-600">Contributions</span>
                                    <span class="font-medium text-gray-900">0</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-layout>
