<x-layout>
    <div class="min-h-screen bg-gradient-to-br from-slate-50 to-blue-50 py-12 px-6">
        <div class="max-w-4xl mx-auto">
            <!-- Back Button -->
            <a href="/projects" class="inline-flex items-center text-blue-600 hover:text-blue-800 mb-6 transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back to Projects
            </a>

            <!-- Main Card -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <!-- Header Section -->
                <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-8 py-10 text-white">
                    <h1 class="text-4xl font-bold mb-3">{{ $blog->title }}</h1>
                    <div class="flex items-center text-blue-100 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                        </svg>
                        <span>{{ $blog->name }}</span>
                        <span class="mx-3">•</span>
                        <span>{{ $blog->created_at->format('M d, Y') }}</span>
                    </div>
                </div>

                <!-- Content Section -->
                <div class="px-8 py-10">
                    <!-- Contact Information Grid -->
                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        <div class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500 mb-1">Email</p>
                                <p class="text-gray-900 font-medium">{{ $blog->email }}</p>
                            </div>
                        </div>

                        @if($blog->phone)
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500 mb-1">Phone</p>
                                    <p class="text-gray-900 font-medium">{{ $blog->phone }}</p>
                                </div>
                            </div>
                        @endif

                        @if($blog->budget)
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500 mb-1">Budget</p>
                                    <p class="text-gray-900 font-medium">{{ $blog->budget }}</p>
                                </div>
                            </div>
                        @endif

                        @if($blog->technologies)
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500 mb-1">Technologies</p>
                                    <p class="text-gray-900 font-medium">{{ $blog->technologies }}</p>
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Divider -->
                    <div class="border-t border-gray-200 my-8"></div>

                    <!-- Project Description -->
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-900 mb-4">Project Description</h2>
                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                            {{ $blog->content }}
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex gap-4 mt-10 pt-8 border-t border-gray-200">
                        <a href="{{ route('blog.edit', $blog->id) }}" class="flex-1 bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-6 py-3 rounded-lg font-medium hover:from-blue-700 hover:to-indigo-700 transition-all shadow-md hover:shadow-lg text-center">
                            Edit Project
                        </a>
                        <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" class="flex-1" onsubmit="return confirm('Are you sure you want to delete this project?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-full bg-red-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-red-700 transition-all shadow-md hover:shadow-lg">
                                Delete Project
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
