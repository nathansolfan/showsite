<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Solar System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <section class="tech-slider py-16 bg-gray-50">
      <div class="container mx-auto px-4 text-center">
        <!-- Section Heading -->
        <h2 class="text-4xl font-bold text-gray-800 mb-4">My Technical Skills</h2>
        <p class="text-lg text-gray-600 mb-10 max-w-2xl mx-auto">
          I work with a range of modern web technologies to build responsive and dynamic applications.
        </p>

        <!-- Grid of Tech Icons -->
        <!-- Using Tailwind grid classes for even columns -->
        <div class="grid gap-8 justify-items-center grid-cols-2 sm:grid-cols-3 md:grid-cols-4">
          @foreach ([
              ['id' => 'htmlModal', 'icon' => 'fa-html5', 'title' => 'HTML5', 'description' => 'The backbone of every website, ensuring that content is structured and accessible.'],
              ['id' => 'cssModal', 'icon' => 'fa-css3-alt', 'title' => 'CSS3', 'description' => 'Controls the look and feel of web pages, including advanced layout options and animations.'],
              ['id' => 'jsModal', 'icon' => 'fa-js', 'title' => 'JavaScript', 'description' => 'Powers dynamic content on the web, from interactive elements to full-scale applications.'],
              ['id' => 'laravelModal', 'icon' => 'fa-laravel', 'title' => 'Laravel', 'description' => 'A robust PHP framework that simplifies complex tasks like routing and authentication.'],
              ['id' => 'reactModal', 'icon' => 'fa-react', 'title' => 'React.js', 'description' => 'A JavaScript library for building user interfaces, enabling efficient data-driven updates.'],
              ['id' => 'nodeModal', 'icon' => 'fa-node-js', 'title' => 'Node.js', 'description' => 'A runtime environment that allows JavaScript to be used on the server side for scalable applications.'],
              ['id' => 'databaseModal', 'icon' => 'fa-solid fa-database', 'title' => 'Databases', 'description' => 'Expertise with databases like MySQL and MongoDB to store and manage data effectively.'],
              ['id' => 'gitModal', 'icon' => 'fa-git-alt', 'title' => 'Git', 'description' => 'Version control system for tracking changes in code and collaborating with teams.']
          ] as $tech)
            <div class="tech-item cursor-pointer" onclick="openModal('{{ $tech['id'] }}')">
              <i class="fa-brands {{ $tech['icon'] }} text-6xl text-blue-500 transition-transform duration-300 hover:scale-110"></i>
              <p class="mt-2 text-sm font-medium text-gray-700">{{ $tech['title'] }}</p>
            </div>

            <!-- Modal for each tech -->
            <div id="{{ $tech['id'] }}" class="modal">
              <div class="modal-content">
                <div class="modal-header text-2xl font-bold text-gray-800">{{ $tech['title'] }}</div>
                <div class="modal-body mt-4 text-gray-600">
                  <p>{{ $tech['description'] }}</p>
                </div>
                <!-- Close Button with "X" Icon -->
                <button class="modal-close mt-6" onclick="closeModal('{{ $tech['id'] }}')">
                  &times; Close
                </button>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>

    <!-- JavaScript for Modals -->
    <script>
      function openModal(modalId) {
        document.getElementById(modalId).style.display = 'flex';
      }

      function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
      }
    </script>

    <!-- CSS for the Skills Section and Modals -->
    <style>
      /* Styling for the Tech Icons Grid */
      .tech-slider {
        /* Additional spacing/padding can be adjusted here if needed */
      }
      .tech-item {
        transition: transform 0.3s ease, color 0.3s ease;
        text-align: center;
      }
      .tech-item:hover i {
        color: #4e54c8;
      }

      /* Modal Backdrop and Content */
      .modal {
        display: none; /* Hidden by default */
        position: fixed;
        z-index: 50;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
      }
      .modal-content {
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        width: 90%;
        max-width: 500px;
        text-align: center;
      }
      .modal-header {
        font-size: 1.75rem;
      }
      .modal-body {
        font-size: 1rem;
      }
      .modal-close {
        background-color: #4e54c8;
        color: #fff;
        padding: 10px 20px;
        font-size: 1rem;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }
      .modal-close:hover {
        background-color: #8f94fb;
      }
    </style>
  </body>
</html>
