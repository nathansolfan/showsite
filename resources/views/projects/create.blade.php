<x-layout>
    <section class="py-20 bg-white">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-center text-gray-800">Add New Project</h1>

            <div class="mt-10 max-w-lg mx-auto bg-gray-100 p-8 rounded-lg shadow-lg">
                <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-6">
                        <label for="name" class="block text-gray-700 font-semibold">Project Name</label>
                        <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('name') }}" required>
                    </div>

                    <div class="mb-6">
                        <label for="description" class="block text-gray-700 font-semibold">Description</label>
                        <textarea name="description" id="description" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4">{{ old('description') }}</textarea>
                    </div>

                    <div class="mb-6">
                        <label for="image" class="block text-gray-700 font-semibold">Project Image</label>
                        <input type="file" name="image" id="image" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="mb-6">
                        <label for="url" class="block text-gray-700 font-semibold">Project URL</label>
                        <input type="url" name="url" id="url" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('url') }}">
                    </div>

                    <div class="mb-6">
                        <label for="github_url" class="block text-gray-700 font-semibold">GitHub URL</label>
                        <input type="url" name="github_url" id="github_url" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('github_url') }}">
                    </div>

                    <div class="flex justify-between">
                        <button type="submit" class="bg-blue-600 text-white py-3 px-6 rounded-full hover:bg-blue-700">Create Project</button>
                        <a href="{{ route('projects.index') }}" class="bg-red-600 text-white py-3 px-6 rounded-full hover:bg-red-700">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    </x-layout>
