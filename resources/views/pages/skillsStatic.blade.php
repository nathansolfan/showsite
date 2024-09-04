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
