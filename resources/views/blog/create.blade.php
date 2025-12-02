<x-layout>
    <section class="py-24 md:py-36 bg-gray-900 min-h-screen flex items-center">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">

                <div class="text-center mb-16">
                    <h2 class="text-6xl font-extrabold text-white tracking-tight leading-tight">
                        Start Your Project
                    </h2>
                    <p class="text-xl text-gray-400 mt-4 max-w-3xl mx-auto">
                        Share your vision, and let's plan the next steps together.
                    </p>
                </div>

                <form action="/proposals" method="POST" enctype="multipart/form-data"
                      class="bg-white p-12 md:p-16 rounded-3xl shadow-2xl shadow-blue-500/10 space-y-12 border border-gray-100">
                    @csrf

                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-2">1. Your Contact Information</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div>
                                <label for="name" class="text-sm text-gray-700 uppercase font-bold tracking-wider mb-2 block">Your Name *</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                       class="w-full border border-gray-300 rounded-xl p-4 text-lg text-gray-900 focus:ring-blue-600 focus:border-blue-600 transition placeholder-gray-400"
                                       required>
                            </div>
                            <div>
                                <label for="email" class="text-sm text-gray-700 uppercase font-bold tracking-wider mb-2 block">Email Address *</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                       class="w-full border border-gray-300 rounded-xl p-4 text-lg text-gray-900 focus:ring-blue-600 focus:border-blue-600 transition placeholder-gray-400"
                                       required>
                            </div>
                            <div>
                                <label for="phone" class="text-sm text-gray-700 uppercase font-bold tracking-wider mb-2 block">Phone Number (Optional)</label>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                       class="w-full border border-gray-300 rounded-xl p-4 text-lg text-gray-900 focus:ring-blue-600 focus:border-blue-600 transition placeholder-gray-400"
                            </div>
                        </div>
                    </div>


                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-2">2. Project Scope & Requirements</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                            <div>
                                <label for="title" class="text-sm text-gray-700 uppercase font-bold tracking-wider mb-2 block">Project Title *</label>
                                <input type="text" id="title" name="title" value="{{ old('title') }}"
                                       class="w-full border border-gray-300 rounded-xl p-4 text-lg text-gray-900 focus:ring-blue-600 focus:border-blue-600 transition placeholder-gray-400"
                                       required>
                            </div>

                            <div>
                                <label for="budget" class="text-sm text-gray-700 uppercase font-bold tracking-wider mb-2 block">Estimated Budget</label>
                                <input type="text" id="budget" name="budget" value="{{ old('budget') }}"
                                       class="w-full border border-gray-300 rounded-xl p-4 text-lg text-gray-900 focus:ring-blue-600 focus:border-blue-600 transition placeholder-gray-400">
                            </div>
                        </div>

                        <div>
                            <label for="content" class="text-sm text-gray-700 uppercase font-bold tracking-wider mb-2 block">Project Details & Goals *</label>
                            <textarea id="content" name="content" rows="10"
                                      class="w-full border border-gray-300 rounded-xl p-5 text-gray-900 focus:ring-blue-600 focus:border-blue-600 transition placeholder-gray-400 text-lg"
                                      placeholder="Describe the scope, key features, target audience, and primary goals you hope to achieve with this project."
                                      required>{{ old('content') }}</textarea>
                            <p class="text-xs text-gray-500 mt-2">Markdown is supported. Detail helps create a better proposal.</p>
                        </div>
                    </div>


                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-2">3. Technical Specs & References</h3>

                        <div class="mb-8">
                            <label for="technologies" class="text-sm text-gray-700 uppercase font-bold tracking-wider mb-2 block">Key Technologies or Stack</label>
                            <input type="text" id="technologies" name="technologies" value="{{ old('technologies') }}"
                                   class="w-full border border-gray-300 rounded-xl p-4 text-lg text-gray-900 focus:ring-blue-600 focus:border-blue-600 transition placeholder-gray-400"
                                   placeholder="">
                        </div>

                        <div>
                            <label class="text-sm text-gray-700 uppercase font-bold tracking-wider mb-3 block">Upload Reference Files</label>

                            <div class="border-2 border-dashed border-gray-300 rounded-2xl p-10 text-center hover:border-blue-600 hover:bg-blue-50 transition relative cursor-pointer group">
                                <input type="file" name="attachments[]" multiple accept="image/*, application/pdf, .doc, .docx"
                                       class="absolute inset-0 opacity-0 cursor-pointer"
                                       onchange="previewFiles(event)">

                                <div id="preview-container" class="mb-4">
                                    <ul id="file-list" class="text-sm text-gray-700 list-disc list-inside space-y-1"></ul>
                                </div>

                                <div id="upload-placeholder">
                                    <svg class="w-12 h-12 text-gray-400 group-hover:text-blue-600 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                    </svg>
                                    <p class="text-lg font-medium text-gray-700">Click to upload files (Wireframes, Briefs, Docs)</p>
                                    <p class="text-sm text-gray-500 mt-1">Max: 5 files, 10MB total.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-8 flex flex-col sm:flex-row justify-end items-center border-t border-gray-200 mt-12">
                        <a href="/" class="text-gray-500 hover:text-gray-900 flex items-center gap-2 text-base font-medium order-2 sm:order-1 mt-4 sm:mt-0 mr-auto">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                            Back to Home
                        </a>

                        <button type="submit"
                                class="w-full sm:w-auto px-12 py-4 bg-blue-700 text-white rounded-xl text-xl font-bold shadow-xl shadow-blue-700/30 hover:bg-blue-800 transition duration-300 transform hover:scale-[1.02] active:scale-[0.98] order-1 sm:order-2">
                            Send Proposal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        function previewFiles(event) {
            const files = event.target.files;
            const fileList = document.getElementById('file-list');
            const placeholder = document.getElementById('upload-placeholder');
            const previewContainer = document.getElementById('preview-container');

            fileList.innerHTML = ''; // Clear previous list

            if (files.length > 0) {
                // Hide the placeholder
                placeholder.classList.add('hidden');
                previewContainer.classList.remove('hidden');

                // Add each file to the list
                Array.from(files).forEach(file => {
                    const listItem = document.createElement('li');
                    listItem.textContent = `${file.name} (${(file.size / 1024 / 1024).toFixed(2)} MB)`;
                    fileList.appendChild(listItem);
                });
            } else {
                // Show the placeholder if no files are selected
                placeholder.classList.remove('hidden');
                previewContainer.classList.add('hidden');
            }
        }
    </script>
</x-layout>
