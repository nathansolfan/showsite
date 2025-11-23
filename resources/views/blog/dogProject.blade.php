<x-layout>

    @php
        $project = [
            'name' => 'Dogerator',
            'description' => 'Dogerator is a fun and interactive mobile app that generates random dog images, allowing users to discover new breeds and save their favorites.',
            'tagline' => 'For dog lovers around the world',
            'narrative' => 'During the development of this project, the goal was to create an engaging mobile experience for dog enthusiasts by combining clean aesthetics, usability, and interactive features. Using the Dog API, users can explore a wide variety of breeds, save their favorite images, and enjoy random dog generation. This project showcases skills in React Native, external API integration, and building responsive and user-friendly interfaces.',
            'features' => [
                'Random dog image generation',
                'Search for specific breeds',
                'Save favorite images for quick access',
                'Interactive and responsive UI',
                'Support for over 100 dog breeds',
                'Intuitive navigation across app screens',
            ],
            'tech' => [
                [
                    'icon' => 'fab fa-react',
                    'title' => 'React Native',
                    'desc' => 'Cross-platform development for Android and iOS'
                ],
                [
                    'icon' => 'fab fa-react',
                    'title' => 'React.js',
                    'desc' => 'Interactive web interface for online demonstration'
                ],
                [
                    'icon' => 'fab fa-js',
                    'title' => 'JavaScript',
                    'desc' => 'App logic, API handling, and interactions'
                ],
                [
                    'icon' => 'fas fa-dog',
                    'title' => 'Dog API',
                    'desc' => 'Source of dog images for the app'
                ],
                [
                    'icon' => 'fas fa-mobile-alt',
                    'title' => 'Responsive Design',
                    'desc' => 'Consistent user experience across multiple screen sizes'
                ],
            ],
            'githubUrl' => 'https://github.com/nathansolfan/DogGenerator',
            'liveUrl' => 'https://dog-photo-app-one.vercel.app/',
            'detailsUrl' => url('/projects/dogGenerator'),
        ];
    @endphp

    <div class="max-w-4xl mx-auto py-10 px-4">
        <!-- Project Header -->
        <div class="mb-6">
            <h2 class="text-3xl font-bold text-gray-800">{{ $project['name'] }}</h2>
            <p class="text-gray-600 text-lg">{{ $project['tagline'] }}</p>
            <p class="mt-3 text-gray-700">{{ $project['narrative'] }}</p>
        </div>

        <!-- Features -->
        <div class="mb-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Key Features</h3>
            <ul class="list-disc pl-5 space-y-2 text-gray-700">
                @foreach ($project['features'] as $feature)
                    <li>{{ $feature }}</li>
                @endforeach
            </ul>
        </div>

        <!-- Tech Stack -->
        <div class="mb-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-3">Tech Stack</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @foreach ($project['tech'] as $tech)
                    <div class="bg-gray-100 p-3 rounded-lg flex items-start gap-3">
                        <i class="{{ $tech['icon'] }} text-2xl text-amber-500 flex-shrink-0"></i>
                        <div>
                            <h4 class="font-bold text-gray-800">{{ $tech['title'] }}</h4>
                            <p class="text-sm text-gray-600">{{ $tech['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Links -->
{{--        <div class="flex flex-wrap gap-3">--}}
{{--            <a href="{{ $project['githubUrl'] }}" target="_blank" class="px-4 py-2 bg-gray-800 text-white rounded-lg hover:bg-gray-700 transition">--}}
{{--                <i class="fab fa-github mr-2"></i> Source Code--}}
{{--            </a>--}}
{{--            <a href="{{ $project['liveUrl'] }}" target="_blank" class="px-4 py-2 bg-amber-500 text-white rounded-lg hover:bg-amber-400 transition">--}}
{{--                <i class="fas fa-external-link-alt mr-2"></i> Live Demo--}}
{{--            </a>--}}
{{--            <a href="{{ $project['detailsUrl'] }}" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 transition">--}}
{{--                More Details--}}
{{--            </a>--}}
{{--        </div>--}}
    </div>

    <!-- Skills Section -->
    <div class="min-h-screen w-full flex items-center">
        <div class="flex flex-col justify-between w-[90%] max-w-7xl h-auto mx-auto rounded-lg shadow-lg">
            @include('sections.box2')
        </div>
    </div>

</x-layout>
