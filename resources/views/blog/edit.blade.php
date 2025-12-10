<x-layout>
    <div class="bg-gray-50 min-h-screen py-16">
        <div class="max-w-4xl mx-auto px-6">

            <!-- Header -->
            <div class="mb-10">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-3">
                    Edit Your Project
                </h1>
                <p class="text-lg text-gray-600">
                    Update your project information
                </p>
            </div>

            <!-- Form Card -->
            <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-8 md:p-10">
                <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data" class="space-y-10">
                    @csrf
                    @method('PUT')

                    <!-- Contact Section -->
                    <div>
                        <div class="flex items-center gap-2 mb-6">
                            <div class="w-8 h-8 bg-blue-600 text-white rounded-lg flex items-center justify-center text-sm font-bold">1</div>
                            <h2 class="text-xl font-bold text-gray-900">Contact</h2>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                    Name <span class="text-red-500">*</span>
                                </label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    value="{{ old('name', $blog->name) }}"
                                    placeholder="John Doe"
                                    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                    required>
                                @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                    Email <span class="text-red-500">*</span>
                                </label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email', $blog->email) }}"
                                    placeholder="john@example.com"
                                    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                    required>
                                @error('email')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                                    Phone
                                </label>
                                <input
                                    type="tel"
                                    id="phone"
                                    name="phone"
                                    value="{{ old('phone', $blog->phone) }}"
                                    placeholder="+44 7123 456789"
                                    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                                @error('phone')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-gray-200"></div>

                    <!-- Project Section -->
                    <div>
                        <div class="flex items-center gap-2 mb-6">
                            <div class="w-8 h-8 bg-purple-600 text-white rounded-lg flex items-center justify-center text-sm font-bold">2</div>
                            <h2 class="text-xl font-bold text-gray-900">Project</h2>
                        </div>

                        <div class="space-y-5">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div>
                                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                                        Title <span class="text-red-500">*</span>
                                    </label>
                                    <input
                                        type="text"
                                        id="title"
                                        name="title"
                                        value="{{ old('title', $blog->title) }}"
                                        placeholder="My Project"
                                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                        required>
                                    @error('title')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="budget" class="block text-sm font-medium text-gray-700 mb-2">
                                        Budget
                                    </label>
                                    <select
                                        id="budget"
                                        name="budget"
                                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                                        <option value="">Select range</option>
                                        <option value="<5k" {{ old('budget', $blog->budget) == '<5k' ? 'selected' : '' }}>Under £5,000</option>
                                        <option value="5k-10k" {{ old('budget', $blog->budget) == '5k-10k' ? 'selected' : '' }}>£5,000 - £10,000</option>
                                        <option value="10k-25k" {{ old('budget', $blog->budget) == '10k-25k' ? 'selected' : '' }}>£10,000 - £25,000</option>
                                        <option value="25k+" {{ old('budget', $blog->budget) == '25k+' ? 'selected' : '' }}>£25,000+</option>
                                    </select>
                                    @error('budget')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label for="content" class="block text-sm font-medium text-gray-700 mb-2">
                                    Description <span class="text-red-500">*</span>
                                </label>
                                <textarea
                                    id="content"
                                    name="content"
                                    rows="6"
                                    placeholder="Tell me about your project..."
                                    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition resize-none"
                                    required>{{ old('content', $blog->content) }}</textarea>
                                @error('content')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-gray-200"></div>

                    <!-- Technical Section -->
                    <div>
                        <div class="flex items-center gap-2 mb-6">
                            <div class="w-8 h-8 bg-green-600 text-white rounded-lg flex items-center justify-center text-sm font-bold">3</div>
                            <h2 class="text-xl font-bold text-gray-900">Technical</h2>
                        </div>

                        <div class="space-y-5">
                            <div>
                                <label for="technologies" class="block text-sm font-medium text-gray-700 mb-2">
                                    Tech Stack
                                </label>
                                <input
                                    type="text"
                                    id="technologies"
                                    name="technologies"
                                    value="{{ old('technologies', $blog->technologies) }}"
                                    placeholder="Laravel, React, Vue..."
                                    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                                @error('technologies')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="attachments" class="block text-sm font-medium text-gray-700 mb-2">
                                    Files
                                </label>
                                <input
                                    type="file"
                                    id="attachments"
                                    name="attachments[]"
                                    multiple
                                    accept="image/*,application/pdf,.doc,.docx"
                                    class="w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-blue-50 file:text-blue-700 file:font-medium hover:file:bg-blue-100 file:cursor-pointer">
                                <p class="mt-2 text-xs text-gray-500">Leave empty to keep existing files</p>
                            </div>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="flex flex-col sm:flex-row items-center justify-between pt-6 border-t border-gray-200 gap-4">
                        <a href="/blog/{{ $blog->id }}" class="text-gray-600 hover:text-gray-900 font-medium transition">
                            ← Cancel
                        </a>

                        <button
                            type="submit"
                            class="w-full sm:w-auto px-8 py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 shadow-lg hover:shadow-xl transition-all">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>

            <!-- Footer Info -->
            <div class="mt-8 text-center">
                <p class="text-sm text-gray-500">
                    ✓ All changes are saved securely
                </p>
            </div>
        </div>
    </div>
</x-layout>
