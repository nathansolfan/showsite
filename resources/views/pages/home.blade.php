<x-layout>
    <style>
        /* Styling for the Tech Icons Section */
        .tech-slider {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap; /* Allow wrapping to multiple lines */
            gap: 2rem; /* Space between icons */
            padding: 2rem 0;
            background-color: #f5f5f5;
        }

        .tech-item {
            font-size: 5rem; /* Make the icons larger */
            color: #20b1ff;
            transition: transform 0.3s ease, color 0.3s ease;
            cursor: pointer; /* Indicate that the icon is clickable */
        }

        .tech-item:hover {
            transform: scale(1.2);
            color: #4e54c8;
        }

        /* Modal backdrop and content */
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
            padding: 20px;
            border-radius: 8px;
            width: 80%;
            max-width: 600px;
            text-align: center;
        }

        .modal-header {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .modal-body {
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .modal-close {
            background-color: #4e54c8;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .modal-close:hover {
            background-color: #8f94fb;
        }
    </style>

    <!-- Hero Section -->
    <section id="hero" class="w-full bg-cover bg-center h-auto" style="background-image: url('your-image-url.jpg');">
        <div class="container mx-auto flex items-center justify-center py-20">
            <div class="text-center">
                <h1 class="text-5xl font-bold text-black">Welcome to My Portfolio</h1>
                <p class="text-xl text-black-200 mt-4">I'm Nathan Ferreira, a passionate web developer skilled in both front-end and back-end tasks.</p>
                <a href="{{ url('/works')}}" class="mt-8 inline-block bg-blue-600 text-white py-3 px-6 rounded-full hover:bg-blue-700">See My Work</a>
            </div>
        </div>
    </section>

    <!-- Static Tech Icons Section -->
    <section class="tech-slider py-10 bg-gray-50">
        <div class="tech-item" onclick="openModal('htmlModal')"><i class="fa-brands fa-html5"></i></div>
        <div class="tech-item" onclick="openModal('cssModal')"><i class="fa-brands fa-css3-alt"></i></div>
        <div class="tech-item" onclick="openModal('jsModal')"><i class="fa-brands fa-js"></i></div>
        <div class="tech-item" onclick="openModal('laravelModal')"><i class="fa-brands fa-laravel"></i></div>
        <div class="tech-item" onclick="openModal('reactModal')"><i class="fa-brands fa-react"></i></div>
        <div class="tech-item" onclick="openModal('nodeModal')"><i class="fa-brands fa-node-js"></i></div>
        <div class="tech-item" onclick="openModal('databaseModal')"><i class="fa-solid fa-database"></i></div>
    </section>

    <!-- Modal HTML Structures -->
    <div id="htmlModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">HTML5</div>
            <div class="modal-body">
                <p>HTML5 is the latest version of the Hypertext Markup Language, the code that describes web pages. It is the backbone of every website and ensures that content is structured and accessible.</p>
            </div>
            <button class="modal-close" onclick="closeModal('htmlModal')">Close</button>
        </div>
    </div>

    <div id="cssModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">CSS3</div>
            <div class="modal-body">
                <p>CSS3 is the latest version of the Cascading Style Sheets language. It brings a host of new features to help control the look and feel of web pages, including advanced layout options and animations.</p>
            </div>
            <button class="modal-close" onclick="closeModal('cssModal')">Close</button>
        </div>
    </div>

    <div id="jsModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">JavaScript</div>
            <div class="modal-body">
                <p>JavaScript is a versatile programming language that powers dynamic content on the web. From interactive elements to full-scale applications, JavaScript is a critical component of modern web development.</p>
            </div>
            <button class="modal-close" onclick="closeModal('jsModal')">Close</button>
        </div>
    </div>

    <div id="laravelModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">Laravel</div>
            <div class="modal-body">
                <p>Laravel is a PHP framework that simplifies complex tasks, such as routing, authentication, and caching, making web development faster and more enjoyable.</p>
            </div>
            <button class="modal-close" onclick="closeModal('laravelModal')">Close</button>
        </div>
    </div>

    <div id="reactModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">React.js</div>
            <div class="modal-body">
                <p>React.js is a JavaScript library for building user interfaces. It allows developers to create large web applications that can update and render efficiently in response to data changes.</p>
            </div>
            <button class="modal-close" onclick="closeModal('reactModal')">Close</button>
        </div>
    </div>

    <div id="nodeModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">Node.js</div>
            <div class="modal-body">
                <p>Node.js is a runtime environment that lets developers use JavaScript on the server side. It’s known for its performance and scalability, especially for building APIs and real-time applications.</p>
            </div>
            <button class="modal-close" onclick="closeModal('nodeModal')">Close</button>
        </div>
    </div>

    <div id="databaseModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">Databases</div>
            <div class="modal-body">
                <p>Understanding databases like MySQL and MongoDB is crucial for building modern web applications. They store and manage data efficiently, allowing applications to retrieve and manipulate data as needed.</p>
            </div>
            <button class="modal-close" onclick="closeModal('databaseModal')">Close</button>
        </div>
    </div>

    <!-- Add your JavaScript at the end of the body to load after the page content -->
    <script>
        function openModal(modalId) {
            document.getElementById(modalId).style.display = 'flex';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }
    </script>

</x-layout>
