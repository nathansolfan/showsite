<x-layout>
    <section class="py-20 bg-white">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-center text-gray-800">Projects</h1>
            <div class="mt-10 max-w-4xl mx-auto">
                <a href="{{ route('projects.create') }}" class="block text-center bg-blue-600 text-white py-3 px-6 rounded-full hover:bg-blue-700 mb-6">Add New Project</a>

                @if ($projects->isEmpty())
                    <p class="text-center text-gray-500">No projects found. Click "Add New Project" to create one.</p>
                @else
                    <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-lg">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="py-3 px-4 text-left text-gray-700 font-semibold">Name</th>
                                <th class="py-3 px-4 text-left text-gray-700 font-semibold">Description</th>
                                <th class="py-3 px-4 text-center text-gray-700 font-semibold">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                            <tr class="border-b">
                                <td class="py-3 px-4">{{ $project->name }}</td>
                                <td class="py-3 px-4">{{ $project->description }}</td>
                                <td class="py-3 px-4 text-center">
                                    <a href="{{ route('projects.edit', $project) }}" class="inline-block bg-yellow-500 text-white py-2 px-4 rounded-full hover:bg-yellow-600">Edit</a>
                                    <form action="{{ route('projects.destroy', $project) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-600 text-white py-2 px-4 rounded-full hover:bg-red-700" onclick="return confirm('Are you sure you want to delete this project?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </section>
    </x-layout>
