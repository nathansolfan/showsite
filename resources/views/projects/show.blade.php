<x-layout>
    <section class="py-20 bg-white">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-center text-gray-800">{{ $project->name }}</h1>

            <div class="mt-10 max-w-3xl mx-auto bg-gray-100 p-8 rounded-lg shadow-lg">
                @if ($project->image)
                    <img src="{{ asset('storage/' . $project->image) }}" alt="Project Image" class="mb-6 rounded-lg w-full">
                @endif

                <div class="mb-6">
                    <h2 class="text-2xl font-semibold text-gray-700">Description</h2>
                    <p class="mt-4 text-gray-600">{{ $project->description }}</p>
                </div>

                <div class="mb-6">
                    <h2 class="text-2xl font-semibold text-gray-700">Project URL</h2>
                    <p class="mt-4">
                        <a href="{{ $project->url }}" target="_blank" class="text-blue-600 hover:underline">{{ $project->url }}</a>
                    </p>
                </div>

                <div class="mb-6">
                    <h2 class="text-2xl font-semibold text-gray-700">GitHub URL</h2>
                    <p class="mt-4">
                        <a href="{{ $project->github_url }}" target="_blank" class="text-blue-600 hover:underline">{{ $project->github_url }}</a>
                    </p>
                </div>

                <div class="flex justify-between">
                    <a href="{{ route('projects.edit', $project) }}" class="bg-yellow-500 text-white py-3 px-6 rounded-full hover:bg-yellow-600">Edit</a>
                    <a href="{{ route('projects.index') }}" class="bg-gray-600 text-white py-3 px-6 rounded-full hover:bg-gray-700">Back to Projects</a>
                </div>
            </div>
        </div>
    </section>
</x-layout>
