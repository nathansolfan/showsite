@php
    $project = [
        'name' => 'Hire Your Driver',
        'description' =>
            'A comprehensive application for route management, bookings, payments, and driver performance analytics.',
        'githubUrl' => 'https://github.com/nathansolfan/DriverApp',
        'liveUrl' => 'https://driverapp.duckdns.org/',
        'detailsUrl' => url('/projects/driverApp'), // NEW: Link to a detailed project page
        'tech' => ['Laravel', 'Livewire', 'Tailwind CSS', 'Alpine.js'], // NEW: Tech stack
    ];
@endphp

<div class="project-item relative flex flex-col justify-center items-center text-center bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-transform  hover:-translate-y-5 duration-900 easy-in-out border border-red-500 " >
    <div class="h-48 overflow-hidden rounded-t-xl">
        {{-- image --}}
        <img src=" {{asset('images/driverAI.jpg')}} " alt="" class="w-full h-full object-cover">
    </div>

    {{-- title / desc --}}
    <h3> {{$project['name']}} </h3>
    <p> {{$project['description']}} </p>

    {{-- btn container --}}
    <div>
        {{-- github --}}
        <a href="">
            <i class=""></i> View on Github
        </a>

        {{-- live preview --}}
        <a href="">
            <i></i>Live Preview
        </a>
    </div>
</div>




{{-- <div class="h-screen project-item relative flex flex-col text-center bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-transform transform hover:-translate-y-1 duration-300 ease-in-out border border-gray-200 mb-8 min-h-[900px] overflow-hidden border-4 border-red-500">

    <!-- Project Image -->
    <div class="w-full h-48 overflow-hidden rounded-t-xl border-4 border-blue-500">
        <img src="{{ asset('images/driverAI.jpg') }}" alt="Driver App Project"
            class="w-full h-full object-cover transition-transform duration-300 transform hover:scale-110">
    </div>

    <!-- Project Title and Description -->
    <h3 class="text-3xl font-semibold text-gray-900 mt-4 hover:text-blue-500 border-4 border-red-500">{{ $project['name'] }}</h3>
    <p class="text-base text-gray-500 mt-4 leading-relaxed">{{ $project['description'] }}</p>

    <!-- Tech Stack Display -->

    <!-- Buttons Container -->
    <div class="mt-6 flex flex-wrap justify-center gap-4">
        <!-- GitHub Button -->
        <a href="{{ $project['githubUrl'] }}" target="_blank"
            class="inline-flex items-center gap-2 border-2 border-gray-900 text-gray-900 bg-transparent px-6 py-3 rounded-lg font-medium shadow-md transition-all duration-300 hover:bg-gray-900 hover:text-white hover:shadow-lg active:translate-y-[1px]">
            <i class="fab fa-github"></i> GitHub
        </a>

        <!-- Live Preview Button -->
        <a href="{{ $project['liveUrl'] }}" target="_blank"
            class="inline-flex items-center gap-2 border-2 border-gray-900 text-gray-900 bg-transparent px-6 py-3 rounded-lg font-medium shadow-md transition-all duration-300 hover:bg-gray-900 hover:text-white hover:shadow-lg active:translate-y-[1px]">
            <i class="fas fa-external-link-alt"></i> Live Preview
        </a>

        <div class="flex flex-wrap justify-center mt-4 gap-3">
            @foreach ($project['tech'] as $tech)
                <span class="tech-item text-sm bg-gradient-to-r from-blue-500 to-indigo-500 text-white px-4 py-2 rounded-full shadow-md font-medium transition-all transform hover:scale-105 hover:shadow-lg cursor-pointer">
                    {{ $tech }}
                </span>
            @endforeach
        </div>

        <div id="tech-details" class="mt-6 hidden text-center bg-gray-100 p-4 rounded-lg shadow-lg">
            <p class="text-lg font-medium" id="tech-name"></p>
            <p class="text-sm text-gray-600 mt-2" id="tech-description"></p>
        </div>

        <script>
            const techDetails = {
                'Laravel': 'A PHP framework for web artisans.',
                'Livewire': 'A full-stack framework for Laravel.',
                'Tailwind CSS': 'A utility-first CSS framework for rapid UI development.',
                'Alpine.js': 'A minimal framework for JavaScript interactions.'
            };

            document.querySelectorAll('.tech-item').forEach(item => {
                item.addEventListener('click', function () {
                    const tech = this.innerText;
                    const detailsDiv = document.getElementById('tech-details');
                    document.getElementById('tech-name').innerText = tech;
                    document.getElementById('tech-description').innerText = techDetails[tech] || 'Details not available.';
                    detailsDiv.classList.remove('hidden');
                    detailsDiv.classList.add('animate-fadeIn');
                });
            });
        </script>

        <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeIn {
            animation: fadeIn 0.3s ease-in-out;
        }
        </style>



    </div>
</div> --}}
