<x-layout>
    <div class="hero bg-cover bg-center h-screen flex items-center justify-center">
        <div class="text-center">
            <h1 class="text-5xl md:text-7xl font-bold text-white">
                Nathan Ferreira
                <br>
                <span id="typewriter-text" class="text-blue-500"></span>
            </h1>
            <p class="text-xl text-gray-200 mt-4">I'm a passionate web developer skilled in both front-end and back-end tasks.</p>
            <a href="{{ url('/works') }}" class="mt-8 inline-block bg-blue-600 text-white py-3 px-6 rounded-full hover:bg-blue-700">See My Work</a>
        </div>
    </div>
</x-layout>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const texts = ["Web Developer", "Designer", "Freelancer", "Learner"];
        let count = 0;
        let index = 0;
        let currentText = '';
        let letter = '';

        (function type() {
            if (count === texts.length) {
                count = 0;
            }
            currentText = texts[count];
            letter = currentText.slice(0, ++index);

            document.getElementById('typewriter-text').textContent = letter;
            if (letter.length === currentText.length) {
                count++;
                index = 0;
                setTimeout(type, 2000);
            } else {
                setTimeout(type, 150);
            }
        }());
    });
</script>
#typewriter-text {
    display: inline-block;
    border-right: 2px solid rgba(255, 255, 255, 0.75);
    animation: blink-caret 0.75s step-end infinite;
}

@keyframes blink-caret {
    from { border-color: rgba(255, 255, 255, 0.75); }
    to { border-color: transparent; }
}
