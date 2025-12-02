<x-layout>
    {{-- Hero Section with Gradient Background --}}
    <div class="min-h-screen bg-gradient-to-br from-gray-50 via-blue-50 to-gray-100">

        {{-- Back Button --}}
        <div class="max-w-5xl mx-auto px-6 pt-8">
            <a href="/user" class="inline-flex items-center gap-2 text-gray-600 hover:text-gray-900 font-medium transition-colors group">
                <svg class="w-5 h-5 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back to Users
            </a>
        </div>

        {{-- Profile Card --}}
        <div class="max-w-5xl mx-auto px-6 py-12">
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">

                {{-- Cover Image / Header --}}
                <div class="relative h-48 bg-gradient-to-r from-blue-600 via-blue-500 to-indigo-600">
                    <div class="absolute inset-0 bg-black/10"></div>

                    {{-- Decorative Pattern --}}
                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute top-0 left-0 w-64 h-64 bg-white rounded-full blur-3xl"></div>
                        <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
                    </div>
                </div>

                {{-- Profile Content --}}
                <div class="relative px-8 pb-8">

                    {{-- Avatar --}}
                    <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between -mt-16 mb-6">
                        <div class="flex items-end gap-6 mb-6 sm:mb-0">
                            <div class="relative group">
                                <div class="w-32 h-32 bg-gradient-to-br from-blue-500 via-indigo-500 to-purple-500 rounded-3xl flex items-center justify-center shadow-2xl border-4 border-white transform group-hover:scale-105 transition-transform duration-300">
                                    <span class="text-white text-5xl font-bold">
                                        {{ strtoupper(substr($user->name, 0, 2)) }}
                                    </span>
                                </div>
                                {{-- Online Status Badge --}}
                                <div class="absolute bottom-2 right-2 w-6 h-6 bg-green-500 border-4 border-white rounded-full"></div>
                            </div>

                            {{-- Name & Title --}}
                            <div class="pb-2">
                                <h1 class="text-4xl font-bold text-gray-900 mb-2">
                                    {{ $user->name }}
                                </h1>
                                <div class="flex items-center gap-2 text-gray-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                    <span class="text-lg">{{ $user->email }}</span>
                                </div>
                            </div>
                        </div>

                        {{-- Edit Button --}}
                        @if(auth()->id() === $user->id)
                            <a href="/user/{{ $user->id }}/edit"
                               class="group relative inline-flex items-center gap-2 px-8 py-4 bg-gray-900 text-white font-semibold rounded-2xl hover:bg-gray-800 transition-all duration-300 shadow-lg hover:shadow-xl overflow-hidden">
                                <span class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                                <svg class="w-5 h-5 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                                <span class="relative z-10">Edit Profile</span>
                            </a>
                        @endif
                    </div>

                    {{-- Stats Grid --}}
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8">

                        {{-- Projects Count --}}
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-6 border border-blue-100 hover:shadow-lg transition-shadow duration-300">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-semibold text-blue-600 uppercase tracking-wider">Projects</span>
                                <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                </svg>
                            </div>
{{--                            <p class="text-4xl font-bold text-gray-900">{{ $user->blogs->count() ?? 0 }}</p>--}}
                            <p class="text-sm text-gray-600 mt-1">Total projects</p>
                        </div>

                        {{-- Member Since --}}
                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-6 border border-purple-100 hover:shadow-lg transition-shadow duration-300">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-semibold text-purple-600 uppercase tracking-wider">Member</span>
                                <svg class="w-6 h-6 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <p class="text-4xl font-bold text-gray-900">{{ $user->created_at->diffInDays(now()) }}</p>
                            <p class="text-sm text-gray-600 mt-1">Days active</p>
                        </div>

                        {{-- Role Badge --}}
                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-6 border border-green-100 hover:shadow-lg transition-shadow duration-300">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-semibold text-green-600 uppercase tracking-wider">Role</span>
                                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <p class="text-2xl font-bold text-gray-900">
                                @if($user->is_admin)
                                    <span class="bg-gradient-to-r from-yellow-600 to-orange-500 bg-clip-text text-transparent">Admin</span>
                                @else
                                    <span class="text-gray-700">User</span>
                                @endif
                            </p>
                            <p class="text-sm text-gray-600 mt-1">Account type</p>
                        </div>
                    </div>

                    {{-- Info Grid --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">

                        {{-- Account Details --}}
                        <div class="space-y-4">
                            <h2 class="text-xl font-bold text-gray-900 flex items-center gap-2">
                                <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                Account Details
                            </h2>

                            <div class="space-y-3">
                                <div class="flex items-start gap-3 p-4 bg-gray-50 rounded-xl">
                                    <svg class="w-5 h-5 text-gray-400 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                                    </svg>
                                    <div>
                                        <p class="text-sm font-medium text-gray-500">User ID</p>
                                        <p class="text-lg font-semibold text-gray-900">#{{ $user->id }}</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-4 bg-gray-50 rounded-xl">
                                    <svg class="w-5 h-5 text-gray-400 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <div>
                                        <p class="text-sm font-medium text-gray-500">Joined</p>
                                        <p class="text-lg font-semibold text-gray-900">{{ $user->created_at->format('M d, Y') }}</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3 p-4 bg-gray-50 rounded-xl">
                                    <svg class="w-5 h-5 text-gray-400 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <div>
                                        <p class="text-sm font-medium text-gray-500">Last Updated</p>
                                        <p class="text-lg font-semibold text-gray-900">{{ $user->updated_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Quick Actions --}}
                        <div class="space-y-4">
                            <h2 class="text-xl font-bold text-gray-900 flex items-center gap-2">
                                <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                                Quick Actions
                            </h2>

                            <div class="space-y-3">
                                <a href="/blog?user={{ $user->id }}"
                                   class="flex items-center justify-between p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border border-blue-100 hover:shadow-md transition-all duration-300 group">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-900">View Projects</p>
                                            <p class="text-sm text-gray-600">See all user projects</p>
                                        </div>
                                    </div>
                                    <svg class="w-5 h-5 text-gray-400 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>

                                @if(auth()->id() === $user->id)
                                    <a href="/blog/create"
                                       class="flex items-center justify-between p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl border border-green-100 hover:shadow-md transition-all duration-300 group">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center">
                                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-gray-900">Create Project</p>
                                                <p class="text-sm text-gray-600">Add a new project</p>
                                            </div>
                                        </div>
                                        <svg class="w-5 h-5 text-gray-400 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                        </svg>
                                    </a>
                                @endif

                                <button class="w-full flex items-center justify-between p-4 bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl border border-purple-100 hover:shadow-md transition-all duration-300 group">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 bg-purple-500 rounded-lg flex items-center justify-center">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-gray-900">Share Profile</p>
                                            <p class="text-sm text-gray-600">Copy profile link</p>
                                        </div>
                                    </div>
                                    <svg class="w-5 h-5 text-gray-400 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- Recent Activity (Optional) --}}
                    @if($user->blogs && $user->blogs->count() > 0)
                        <div class="mt-8">
                            <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-2">
                                <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                </svg>
                                Recent Projects
                            </h2>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                @foreach($user->blogs->take(4) as $blog)
                                    <a href="/blog/{{ $blog->id }}"
                                       class="group p-5 bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl border border-gray-200 hover:border-blue-300 hover:shadow-lg transition-all duration-300">
                                        <h3 class="font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors">
                                            {{ $blog->title }}
                                        </h3>
                                        <p class="text-sm text-gray-600 mb-3 line-clamp-2">
                                            {{ $blog->description }}
                                        </p>
                                        <div class="flex items-center justify-between text-xs text-gray-500">
                                            <span>{{ $blog->created_at->diffForHumans() }}</span>
                                            <span class="text-blue-500 group-hover:translate-x-1 transition-transform">View →</span>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layout>
