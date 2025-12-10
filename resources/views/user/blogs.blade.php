<x-layout>
    <div class="bg-gray-50 min-h-screen py-12">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Header Section -->
            <div class="mb-10">
                <div class="flex items-center justify-between flex-wrap gap-4">
                    <div>
                        <h1 class="text-4xl font-bold text-gray-900 mb-2">
                            {{ $user->name }}'s Projects
                        </h1>
                        <p class="text-gray-600">
                            Manage and view all your project submissions
                        </p>
                    </div>
                    <a href="/blog/create" class="px-6 py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 shadow-lg hover:shadow-xl transition-all">
                        + New Project
                    </a>
                </div>
            </div>

            @if($blogs->isEmpty())
                <!-- Empty State -->
                <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-16 text-center">
                    <div class="max-w-md mx-auto">
                        <div class="w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">No projects yet</h3>
                        <p class="text-gray-600 mb-6">Start by creating your first project proposal</p>
                        <a href="/blog/create" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition-all">
                            Create Your First Project
                        </a>
                    </div>
                </div>
            @else
                <!-- Projects Grid -->
                <div class="grid gap-6">
                    @foreach($blogs as $blog)
                        <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden hover:shadow-xl transition-all">
                            <div class="p-8">
                                <!-- Project Header -->
                                <div class="flex items-start justify-between mb-6">
                                    <div class="flex-1">
                                        <h2 class="text-2xl font-bold text-gray-900 mb-2">
                                            {{ $blog->title }}
                                        </h2>
                                        <div class="flex items-center gap-3 text-sm text-gray-500">
                                            <span class="flex items-center gap-1">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                                </svg>
                                                {{ $blog->created_at->format('M d, Y') }}
                                            </span>
                                            @if($blog->budget)
                                                <span class="flex items-center gap-1">
                                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"/>
                                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"/>
                                                    </svg>
                                                    {{ $blog->budget }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- Status Badge (opcional) -->
                                    <span class="px-3 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full">
                                        Active
                                    </span>
                                </div>

                                <!-- Info Cards Grid -->
                                <div class="grid md:grid-cols-3 gap-4 mb-6">
                                    <div class="flex items-start gap-3 p-4 bg-gray-50 rounded-lg">
                                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-xs text-gray-500 mb-1">Contact Name</p>
                                            <p class="text-sm font-semibold text-gray-900 truncate">{{ $blog->name }}</p>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-3 p-4 bg-gray-50 rounded-lg">
                                        <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                            </svg>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-xs text-gray-500 mb-1">Email</p>
                                            <p class="text-sm font-semibold text-gray-900 truncate">{{ $blog->email }}</p>
                                        </div>
                                    </div>

                                    @if($blog->phone)
                                        <div class="flex items-start gap-3 p-4 bg-gray-50 rounded-lg">
                                            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                                <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                                </svg>
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="text-xs text-gray-500 mb-1">Phone</p>
                                                <p class="text-sm font-semibold text-gray-900 truncate">{{ $blog->phone }}</p>
                                            </div>
                                        </div>
                                    @endif

                                    @if($blog->technologies)
                                        <div class="flex items-start gap-3 p-4 bg-gray-50 rounded-lg {{ $blog->phone ? 'md:col-span-3' : 'md:col-span-1' }}">
                                            <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                                <svg class="w-5 h-5 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                                </svg>
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="text-xs text-gray-500 mb-1">Technologies</p>
                                                <p class="text-sm font-semibold text-gray-900">{{ $blog->technologies }}</p>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <!-- Project Description -->
                                <div class="mb-6">
                                    <p class="text-gray-600 leading-relaxed">
                                        {{ Str::limit($blog->content, 200) }}
                                    </p>
                                </div>

                                <!-- Action Buttons -->
                                <div class="flex flex-wrap gap-3 pt-6 border-t border-gray-200">
                                    <a href="/blog/{{$blog->id}}" class="flex-1 min-w-[140px] px-5 py-2.5 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition-all text-center shadow-md hover:shadow-lg">
                                        View Details
                                    </a>
                                    <a href="{{ route('blog.edit', $blog->id) }}" class="flex-1 min-w-[140px] px-5 py-2.5 bg-white border-2 border-gray-300 text-gray-700 rounded-lg font-medium hover:bg-gray-50 transition-all text-center">
                                        Edit Project
                                    </a>
                                    <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" class="flex-1 min-w-[140px]" onsubmit="return confirm('Are you sure you want to delete this project? This action cannot be undone.');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-full px-5 py-2.5 bg-white border-2 border-red-300 text-red-600 rounded-lg font-medium hover:bg-red-50 transition-all">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            @endif
        </div>
    </div>
</x-layout>
