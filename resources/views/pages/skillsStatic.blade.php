<!-- Static Tech Icons Section -->
<section class="tech-slider py-10 bg-gray-50">
    @foreach ([
        ['id' => 'htmlModal', 'icon' => 'fa-html5', 'title' => 'HTML5', 'description' => 'It is the backbone of every website and ensures that content is structured and accessible'],
        ['id' => 'cssModal', 'icon' => 'fa-css3-alt', 'title' => 'CSS3', 'description' => 'Help control the look and feel of web pages, including advanced layout options and animations'],
        ['id' => 'jsModal', 'icon' => 'fa-js', 'title' => 'JavaScript', 'description' => 'Powers dynamic content on the web from interactive elements to full-scale applications'],
        ['id' => 'laravelModal', 'icon' => 'fa-laravel', 'title' => 'Laravel', 'description' => 'PHP framework that simplifies complex tasks, such as routing, authentication, and caching, making web development faster and more enjoyable.'],
        ['id' => 'reactModal', 'icon' => 'fa-react', 'title' => 'React.js', 'description' => 'JavaScript library for building user interfaces. It allows developers to create large web applications that can update and render efficiently in response to data changes'],
        ['id' => 'nodeModal', 'icon' => 'fa-node-js', 'title' => 'Node.js', 'description' => 'Node.js is a runtime environment that lets developers use JavaScript on the server side. It’s known for its performance and scalability, especially for building APIs and real-time applications.'],
        ['id' => 'databaseModal', 'icon' => 'fa-solid fa-database', 'title' => 'Databases', 'description' => 'Understanding databases like MySQL and MongoDB is crucial for building modern web applications. They store and manage data efficiently, allowing applications to retrieve and manipulate data as needed']
    ] as $tech)
    <div class="tech-item" onclick="openModal('{{ $tech['id'] }}')">
        <i class="fa-brands {{ $tech['icon'] }}"></i>
    </div>

    <!-- Modal -->
    <div id="{{ $tech['id'] }}" class="modal">
        <div class="modal-content">
            <div class="modal-header">{{ $tech['title'] }}</div>
            <div class="modal-body">
                <p>{{ $tech['description'] }}</p>
            </div>
            <button class="modal-close" onclick="closeModal('{{ $tech['id'] }}')">Close</button>
        </div>
    </div>
    @endforeach
</section>

<!-- JavaScript for modals -->
<script>
    function openModal(modalId) {
        document.getElementById(modalId).style.display = 'flex';
    }

    function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
    }
</script>

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
