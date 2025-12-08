<x-layout>
    <div class="bg-gray-50 min-h-screen py-16 md:py-24">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">

                <!-- Header -->
                <div class="text-center mb-12">
                    <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-4">
                        Start Your Project
                    </h1>
                    <p class="text-xl text-gray-600">
                        Share your vision, and let's plan the next steps together
                    </p>
                </div>

                <!-- Progress Steps -->
                <div class="flex items-center justify-center gap-4 mb-12">
                    <div class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-semibold">1</div>
                        <span class="text-sm font-medium text-gray-700 hidden sm:inline">Contact</span>
                    </div>
                    <div class="w-16 h-0.5 bg-gray-300"></div>
                    <div class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-gray-200 text-gray-600 rounded-full flex items-center justify-center font-semibold">2</div>
                        <span class="text-sm font-medium text-gray-500 hidden sm:inline">Details</span>
                    </div>
                    <div class="w-16 h-0.5 bg-gray-300"></div>
                    <div class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-gray-200 text-gray-600 rounded-full flex items-center justify-center font-semibold">3</div>
                        <span class="text-sm font-medium text-gray-500 hidden sm:inline">Technical</span>
                    </div>
                </div>

                <!-- Form Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-200 p-8 md:p-12">
                    <form action="/proposals" method="POST" enctype="multipart/form-data" class="space-y-12">
                        @csrf

                        <!-- Section 1: Contact -->
                        <div>
                            <div class="flex items-center gap-3 mb-6 pb-4 border-b-2 border-gray-100">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center text-blue-600 font-bold">1</div>
                                <div>
                                    <h2 class="text-xl font-bold text-gray-900">Your Information</h2>
                                    <p class="text-sm text-gray-500">Tell us who you are</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Your Name <span class="text-red-500">*</span>
                                    </label>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        value="{{ old('name') }}"
                                        placeholder="John Doe"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                        required>
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Email <span class="text-red-500">*</span>
                                    </label>
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        placeholder="john@example.com"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                        required>
                                </div>

                                <div>
                                    <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Phone (Optional)
                                    </label>
                                    <input
                                        type="tel"
                                        id="phone"
                                        name="phone"
                                        value="{{ old('phone') }}"
                                        placeholder="+44 7123 456789"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>
                            </div>
                        </div>

                        <!-- Section 2: Project -->
                        <div>
                            <div class="flex items-center gap-3 mb-6 pb-4 border-b-2 border-gray-100">
                                <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center text-purple-600 font-bold">2</div>
                                <div>
                                    <h2 class="text-xl font-bold text-gray-900">Project Details</h2>
                                    <p class="text-sm text-gray-500">What do you want to build?</p>
                                </div>
                            </div>

                            <div class="space-y-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">
                                            Project Title <span class="text-red-500">*</span>
                                        </label>
                                        <input
                                            type="text"
                                            id="title"
                                            name="title"
                                            value="{{ old('title') }}"
                                            placeholder="E.g., E-commerce Platform"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                            required>
                                    </div>

                                    <div>
                                        <label for="budget" class="block text-sm font-semibold text-gray-700 mb-2">
                                            Budget
                                        </label>
                                        <select
                                            id="budget"
                                            name="budget"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                            <option value="">Select a range</option>
                                            <option value="<5k">Less than £5,000</option>
                                            <option value="5k-10k">£5,000 - £10,000</option>
                                            <option value="10k-25k">£10,000 - £25,000</option>
                                            <option value="25k+">£25,000+</option>
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <label for="content" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Project Description <span class="text-red-500">*</span>
                                    </label>
                                    <textarea
                                        id="content"
                                        name="content"
                                        rows="8"
                                        placeholder="Describe your project, key features, target audience, and goals..."
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                        required>{{ old('content') }}</textarea>
                                    <p class="text-xs text-gray-500 mt-2">More detail helps create a better proposal</p>
                                </div>
                            </div>
                        </div>

                        <!-- Section 3: Technical -->
                        <div>
                            <div class="flex items-center gap-3 mb-6 pb-4 border-b-2 border-gray-100">
                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center text-green-600 font-bold">3</div>
                                <div>
                                    <h2 class="text-xl font-bold text-gray-900">Technical Details</h2>
                                    <p class="text-sm text-gray-500">Optional but helpful</p>
                                </div>
                            </div>

                            <div class="space-y-6">
                                <div>
                                    <label for="technologies" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Preferred Technologies
                                    </label>
                                    <input
                                        type="text"
                                        id="technologies"
                                        name="technologies"
                                        value="{{ old('technologies') }}"
                                        placeholder="E.g., Laravel, React, Vue.js, Tailwind"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>

                                <div>
                                    <label for="attachments" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Reference Files
                                    </label>
                                    <input
                                        type="file"
                                        id="attachments"
                                        name="attachments[]"
                                        multiple
                                        accept="image/*,application/pdf,.doc,.docx"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-blue-50 file:text-blue-700 file:font-semibold hover:file:bg-blue-100">
                                    <p class="text-xs text-gray-500 mt-2">Max 5 files, 10MB total</p>
                                </div>
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="flex flex-col sm:flex-row items-center justify-between pt-6 border-t border-gray-200 gap-4">
                            <a href="/" class="text-gray-600 hover:text-gray-900 font-medium">
                                ← Back to Home
                            </a>

                            <button
                                type="submit"
                                class="w-full sm:w-auto px-8 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-lg font-semibold hover:shadow-lg transition-all">
                                Send Proposal →
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Trust Badges -->
                <div class="mt-8 flex flex-wrap items-center justify-center gap-6 text-sm text-gray-600">
                    <div class="flex items-center gap-2">
                        <span class="text-green-500">✓</span>
                        <span>Free Consultation</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-green-500">✓</span>
                        <span>24h Response</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-green-500">✓</span>
                        <span>No Commitment</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
