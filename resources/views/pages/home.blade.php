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
    <div class="hero bg-cover bg-center h-screen flex items-center justify-center">
        <div class="text-center">
            <h1 class="text-5xl md:text-7xl font-bold text-gray">
                Nathan Ferreira
                <br>
                <span id="typewriter-text" class="text-blue-500"></span>
            </h1>
            <p class="text-xl text-black-200 mt-4">I'm a passionate web developer skilled in both front-end and back-end tasks.</p>
            <a href="{{ url('/works') }}" class="mt-8 inline-block bg-blue-600 text-white py-3 px-6 rounded-full hover:bg-blue-700">See My Work</a>
        </div>
    </div>

    @include('pages.skillsStatic')



    <!-- Add your JavaScript at the end of the body to load after the page content -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const texts = ["Web Developer", "Designer", "Freelancer", "Learner"];
            let count = 0;
            let index = 0;
            let currentText = '';
            let letter = '';

            function type() {



                if (count === texts.length) {
                    count = 0;
                }
                currentText = texts[count];
                letter = currentText.slice(0, ++index);

                document.getElementById('typewriter-text').textContent = letter;
                if (letter.length === currentText.length) {
                    count++;
                    index = 0;
                    setTimeout(type, 2000); // Wait 2 seconds before starting the next word
                } else {
                    setTimeout(type, 150); // Adjust the typing speed here
                }
            }

            type();
        });

        function openModal(modalId) {
            document.getElementById(modalId).style.display = 'flex';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }
    </script>
</x-layout>
