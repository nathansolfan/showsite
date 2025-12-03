<x-layout>
    <div class="min-h-screen bg-gradient-to-br from-gray-50 via-blue-50 to-gray-100">

        {{-- Back Button --}}
        <div class="max-w-5xl mx-auto px-6 pt-8">
            <a href="/user" class="inline-flex items-center gap-2 text-gray-600 hover:text-gray-900 font-medium transition-colors">
                ← Back to Users
            </a>
        </div>

        {{-- Profile Card --}}
        <div class="max-w-5xl mx-auto px-6 py-12">
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">

                {{-- Cover --}}
                <div class="h-48 bg-gradient-to-r from-blue-600 via-blue-500 to-indigo-600"></div>

                {{-- Content --}}
                <div class="relative px-8 pb-8">

                    {{-- Avatar & Header --}}
                    <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between -mt-16 mb-8">
                        <div class="flex items-end gap-6 mb-6 sm:mb-0">
                            {{-- Avatar --}}
                            <div class="relative">
                                <div class="w-32 h-32 bg-gradient-to-br from-blue-500 via-indigo-500 to-purple-500 rounded-3xl flex items-center justify-center shadow-2xl border-4 border-white">
                                    <span class="text-white text-5xl font-bold">
                                        {{ strtoupper(substr($user->name, 0, 2)) }}
                                    </span>
                                </div>
                                <div class="absolute bottom-2 right-2 w-6 h-6 bg-green-500 border-4 border-white rounded-full"></div>
                            </div>

                            {{-- Name & Email --}}
                            <div class="pb-2">
                                <h1 class="text-4xl font-bold text-gray-900 mb-2">
                                    {{ $user->name }}
                                </h1>
                                <p class="text-lg text-gray-600">
                                    📧 {{ $user->email }}
                                </p>
                            </div>
                        </div>

                        {{-- Edit Button --}}
                        @if(auth()->id() === $user->id)
                            <a href="/user/{{ $user->id }}/edit"
                               class="px-8 py-4 bg-gray-900 text-white font-semibold rounded-2xl hover:bg-gray-800 transition-all shadow-lg hover:shadow-xl">
                                ✏️ Edit Profile
                            </a>
                        @endif
                    </div>

                    {{-- Stats Cards --}}
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8">

                        {{-- Projects --}}
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-6 border border-blue-100">
                            <p class="text-sm font-semibold text-blue-600 uppercase mb-2">📁 Projects</p>
                            <p class="text-4xl font-bold text-gray-900">0</p>
                            <p class="text-sm text-gray-600 mt-1">Total projects</p>
                        </div>

                        {{-- Member Since --}}
                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-6 border border-purple-100">
                            <p class="text-sm font-semibold text-purple-600 uppercase mb-2">📅 Member</p>
                            <p class="text-4xl font-bold text-gray-900">{{ $user->created_at->diffInDays(now()) }}</p>
                            <p class="text-sm text-gray-600 mt-1">Days active</p>
                        </div>

                        {{-- Role --}}
                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-6 border border-green-100">
                            <p class="text-sm font-semibold text-green-600 uppercase mb-2">👤 Role</p>
                            <p class="text-2xl font-bold">
                                @if($user->is_admin)
                                    <span class="bg-gradient-to-r from-yellow-600 to-orange-500 bg-clip-text text-transparent">⭐ Admin</span>
                                @else
                                    <span class="text-gray-700">User</span>
                                @endif
                            </p>
                            <p class="text-sm text-gray-600 mt-1">Account type</p>
                        </div>
                    </div>

                    {{-- Info Grid --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        {{-- Account Details --}}
                        <div>
                            <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                                ℹ️ Account Details
                            </h2>

                            <div class="space-y-3">
                                <div class="p-4 bg-gray-50 rounded-xl">
                                    <p class="text-sm font-medium text-gray-500">🏷️ User ID</p>
                                    <p class="text-lg font-semibold text-gray-900">#{{ $user->id }}</p>
                                </div>

                                <div class="p-4 bg-gray-50 rounded-xl">
                                    <p class="text-sm font-medium text-gray-500">📆 Joined</p>
                                    <p class="text-lg font-semibold text-gray-900">{{ $user->created_at->format('M d, Y') }}</p>
                                </div>

                                <div class="p-4 bg-gray-50 rounded-xl">
                                    <p class="text-sm font-medium text-gray-500">🕐 Last Updated</p>
                                    <p class="text-lg font-semibold text-gray-900">{{ $user->updated_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        </div>

                        {{-- Quick Actions --}}
                        <div>
                            <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                                ⚡ Quick Actions
                            </h2>

                            <div class="space-y-3">
                                <a href="/blog?user={{ $user->id }}"
                                   class="flex items-center justify-between p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border border-blue-100 hover:shadow-md transition-all">
                                    <div>
                                        <p class="font-semibold text-gray-900">📂 View Projects</p>
                                        <p class="text-sm text-gray-600">See all user projects</p>
                                    </div>
                                    <span class="text-2xl">→</span>
                                </a>

                                @if(auth()->id() === $user->id)
                                    <a href="/blog/create"
                                       class="flex items-center justify-between p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl border border-green-100 hover:shadow-md transition-all">
                                        <div>
                                            <p class="font-semibold text-gray-900">➕ Create Project</p>
                                            <p class="text-sm text-gray-600">Add a new project</p>
                                        </div>
                                        <span class="text-2xl">→</span>
                                    </a>
                                @endif

                                <button class="w-full flex items-center justify-between p-4 bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl border border-purple-100 hover:shadow-md transition-all">
                                    <div>
                                        <p class="font-semibold text-gray-900">🔗 Share Profile</p>
                                        <p class="text-sm text-gray-600">Copy profile link</p>
                                    </div>
                                    <span class="text-2xl">→</span>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-layout>
