<div class="py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 flex flex-col lg:flex-row gap-12 items-center">
      <!-- Left Section: Skills -->
      <div class="lg:flex-1 lg:pr-12">
        <div class="lg:text-left text-center">
          <h2 class="text-base font-semibold text-indigo-600">My Technical Skills</h2>
          <p class="mt-2 text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
            I work with a range of modern web technologies
          </p>
          <p class="mt-6 text-lg text-gray-600">
            Building responsive and dynamic applications with clean and scalable solutions.
          </p>
        </div>
        <div class="mt-12">
          <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-2">
            <!-- Skill Items -->
            @foreach([
              ['icon' => 'fa-html5', 'title' => 'HTML5', 'desc' => 'The foundation of web structure, ensuring accessibility and semantic design.'],
              ['icon' => 'fa-css3-alt', 'title' => 'CSS3', 'desc' => 'Creating visually engaging layouts with modern styling techniques.'],
              ['icon' => 'fa-js', 'title' => 'JavaScript', 'desc' => 'Enhancing interactivity and dynamic features on web applications.'],
              ['icon' => 'fa-laravel', 'title' => 'Laravel', 'desc' => 'A powerful PHP framework for building scalable web applications.'],
              // ['icon' => 'fa-react', 'title' => 'React.js', 'desc' => 'Efficiently managing UI with reusable components and state management.'],
              ['icon' => 'fa-node-js', 'title' => 'Node.js', 'desc' => 'Building scalable backend services and APIs with JavaScript.'],
              // ['icon' => 'fa-database', 'title' => 'Databases', 'desc' => 'Efficient data management with MySQL, MongoDB, and more.'],
              // ['icon' => 'fa-git-alt', 'title' => 'Git', 'desc' => 'Version control and collaboration for seamless team development.']
            ] as $skill)
            <div class="relative pl-16">
              <dt class="text-lg font-semibold text-gray-900">
                <div class="absolute top-0 left-0 flex w-12 h-12 items-center justify-center rounded-lg bg-indigo-600 transition-transform duration-300 hover:-translate-y-2">
                  <i class="fa-brands {{ $skill['icon'] }} text-white text-2xl"></i>
                </div>
                {{ $skill['title'] }}
              </dt>
              <dd class="mt-2 text-base text-gray-600">{{ $skill['desc'] }}</dd>
            </div>
            @endforeach
          </dl>
        </div>
      </div>

      <!-- Right Section: Image -->
      <div class="lg:flex-1">
        <div class="relative rounded-lg shadow-lg overflow-hidden">
          <img
            src="{{ asset('images/bgimagecake.jpg') }}"
            alt="Technical Skills"
            class="w-full h-auto object-cover"
          />
          <div class="absolute bottom-4 left-4 bg-white bg-opacity-80 p-4 rounded-lg shadow-md">
            <blockquote class="italic text-gray-800 text-sm">
              The difficulty lies not so much in developing new ideas as in escaping from old ones.
            </blockquote>
            <p class="text-gray-600 text-sm mt-1">- John Maynard Keynes</p>
          </div>
        </div>
      </div>
    </div>
</div>



