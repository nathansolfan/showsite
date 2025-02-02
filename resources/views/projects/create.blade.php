<x-layout>
    <section class="py-12 bg-gray-50">
        <div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-lg">
            <header class="mb-12 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight">
                    Add New Project
                </h1>
                <p class="mt-4 text-lg text-gray-600">
                    Start your journey by detailing your innovative project.
                </p>
            </header>


            <!-- Error Summary for screen readers -->
            @if ($errors->any())
                <div class="mb-6 p-4 bg-red-50 border border-red-300 rounded" role="alert">
                    <p class="text-sm font-medium text-red-700">Please fix the following errors:</p>
                    <ul class="mt-2 list-disc pl-5 text-sm text-red-700">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="space-y-6">
                    <!-- Project Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">
                            Project Name <span class="text-red-500" aria-hidden="true">*</span>
                        </label>
                        <div class="mt-1">
                            <input type="text" name="name" id="name" required
                                class="block w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 transition duration-150 ease-in-out"
                                placeholder="Enter project name" value="{{ old('name') }}"
                                aria-invalid="{{ $errors->has('name') ? 'true' : 'false' }}"
                                aria-describedby="name-error">
                        </div>
                        @error('name')
                            <p class="mt-2 text-sm text-red-600" id="name-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <div class="mt-1">
                            <textarea id="description" name="description" rows="4"
                                class="block w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 transition duration-150 ease-in-out"
                                placeholder="Provide a brief description" aria-describedby="description-error">{{ old('description') }}</textarea>
                        </div>
                        @error('description')
                            <p class="mt-2 text-sm text-red-600" id="description-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Project Image -->
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700">Project Image</label>
                        <div class="mt-1">
                            <input type="file" name="image" id="image"
                                class="block w-full text-sm text-gray-500
                                       file:mr-4 file:py-2 file:px-4
                                       file:rounded-md file:border-0
                                       file:text-sm file:font-medium
                                       file:bg-gray-50 hover:file:bg-gray-100"
                                aria-describedby="image-error">
                        </div>
                        @error('image')
                            <p class="mt-2 text-sm text-red-600" id="image-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Project URL -->
                    <div>
                        <label for="url" class="block text-sm font-medium text-gray-700">Project URL</label>
                        <div class="mt-1">
                            <input type="url" name="url" id="url"
                                class="block w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 transition duration-150 ease-in-out"
                                placeholder="https://example.com" value="{{ old('url') }}"
                                aria-describedby="url-error">
                        </div>
                        @error('url')
                            <p class="mt-2 text-sm text-red-600" id="url-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- GitHub URL -->
                    <div>
                        <label for="github_url" class="block text-sm font-medium text-gray-700">GitHub URL</label>
                        <div class="mt-1">
                            <input type="url" name="github_url" id="github_url"
                                class="block w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 transition duration-150 ease-in-out"
                                placeholder="https://github.com/username/repo" value="{{ old('github_url') }}"
                                aria-describedby="github_url-error">
                        </div>
                        @error('github_url')
                            <p class="mt-2 text-sm text-red-600" id="github_url-error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="mt-8 flex justify-end space-x-4">
                    <a href="{{ route('projects.index') }}"
                        class="inline-flex items-center px-6 py-3 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
                        Cancel
                    </a>
                    <button type="submit"
                        class="inline-flex items-center px-6 py-3 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
                        Create Project
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layout>
