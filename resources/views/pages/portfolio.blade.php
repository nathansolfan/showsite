<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Solar System with 3D Shadows</title>
    <style>
        /* Basic body styling */
        body {
            background-color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
            font-family: sans-serif;
        }

        /* Container for the solar system */
        .solar-system {
            position: relative;
            width: 600px;
            height: 600px;
            /* No 3D transform here – we rely solely on shadows */
        }

        /* The central "sun" with extra shadow for depth */
        .sun {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 80px;
            height: 80px;
            margin-top: -40px;
            margin-left: -40px;
            background: radial-gradient(circle, #ffea00, #ff8c00);
            border-radius: 50%;
            box-shadow:
                0 0 20px rgba(255, 234, 0, 0.8),
                0 0 40px rgba(255, 140, 0, 0.6),
                inset 0 0 10px rgba(0, 0, 0, 0.5);
        }

        /* Orbit paths for visual reference */
        .orbit {
            pointer-events: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 1px dashed rgba(255, 255, 255, 0.2);
            border-radius: 50%;
        }

        .orbit1 {
            width: 150px;
            height: 150px;
        }

        .orbit2 {
            width: 200px;
            height: 200px;
        }

        .orbit3 {
            width: 250px;
            height: 250px;
        }

        .orbit4 {
            width: 300px;
            height: 300px;
        }

        .orbit5 {
            width: 350px;
            height: 350px;
        }

        .orbit6 {
            width: 400px;
            height: 400px;
        }

        .orbit7 {
            width: 450px;
            height: 450px;
        }

        .orbit8 {
            width: 500px;
            height: 500px;
        }

        /* Each planet is absolutely positioned inside its orbit with a shadow for depth */
        .planet {
            pointer-events: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            transition: transform 0.3s ease;
            box-shadow: 3px 3px 8px rgba(0, 0, 0, 0.7);
        }

        .planet:hover {
            animation-play-state: paused;

            transform: scale(2.0);
            box-shadow: 5px 5px 12px rgba(0, 0, 0, 0.8);

        }

        /* Keyframe animations for orbiting */
        @keyframes orbit1 {
            from {
                transform: rotate(0deg) translate(0, -75px);
            }

            to {
                transform: rotate(360deg) translate(0, -75px);
            }
        }

        @keyframes orbit2 {
            from {
                transform: rotate(0deg) translate(0, -100px);
            }

            to {
                transform: rotate(360deg) translate(0, -100px);
            }
        }

        @keyframes orbit3 {
            from {
                transform: rotate(0deg) translate(0, -125px);
            }

            to {
                transform: rotate(360deg) translate(0, -125px);
            }
        }

        @keyframes orbit4 {
            from {
                transform: rotate(0deg) translate(0, -150px);
            }

            to {
                transform: rotate(360deg) translate(0, -150px);
            }
        }

        @keyframes orbit5 {
            from {
                transform: rotate(0deg) translate(0, -175px);
            }

            to {
                transform: rotate(360deg) translate(0, -175px);
            }
        }

        @keyframes orbit6 {
            from {
                transform: rotate(0deg) translate(0, -200px);
            }

            to {
                transform: rotate(360deg) translate(0, -200px);
            }
        }

        @keyframes orbit7 {
            from {
                transform: rotate(0deg) translate(0, -225px);
            }

            to {
                transform: rotate(360deg) translate(0, -225px);
            }
        }

        @keyframes orbit8 {
            from {
                transform: rotate(0deg) translate(0, -250px);
            }

            to {
                transform: rotate(360deg) translate(0, -250px);
            }
        }

        /* Assign each planet its orbit animation and color */
        .planet1 {
            animation: orbit1 6s linear infinite;
            background-color: #BDB76B;
        }

        .planet2 {
            animation: orbit2 8s linear infinite;
            background-color: #DAA520;
        }

        .planet3 {
            animation: orbit3 10s linear infinite;
            background-color: #1E90FF;
        }

        .planet4 {
            animation: orbit4 12s linear infinite;
            background-color: #FF4500;
        }

        .planet5 {
            animation: orbit5 14s linear infinite;
            background-color: #FFD700;
        }

        .planet6 {
            animation: orbit6 16s linear infinite;
            background-color: #87CEFA;
        }

        .planet7 {
            animation: orbit7 18s linear infinite;
            background-color: #66CDAA;
        }

        .planet8 {
            animation: orbit8 20s linear infinite;
            background-color: #4169E1;
        }

        /* Modal styling for planet information */
        .planet-modal {
            display: none;
            position: fixed;
            z-index: 100;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
        }

        .planet-modal-content {
            background: #fff;
            padding: 2rem;
            border-radius: 8px;
            max-width: 400px;
            width: 90%;
            text-align: center;
        }

        .planet-modal-close {
            background: #4e54c8;
            color: #fff;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 1rem;
            transition: background 0.3s ease;
        }

        .planet-modal-close:hover {
            background: #8f94fb;
        }
    </style>
</head>

<body>
    <div class="solar-system-wrapper">
        <div class="solar-system">
            <div class="sun"></div>

            <!-- Orbit 1 with Planet 1 -->
            <div class="orbit orbit1">
                <div class="planet planet1" onclick="openPlanetModal('planet1')"></div>
            </div>

            <!-- Orbit 2 with Planet 2 -->
            <div class="orbit orbit2">
                <div class="planet planet2" onclick="openPlanetModal('planet2')"></div>
            </div>

            <!-- Orbit 3 with Planet 3 -->
            <div class="orbit orbit3">
                <div class="planet planet3" onclick="openPlanetModal('planet3')"></div>
            </div>

            <!-- Orbit 4 with Planet 4 -->
            <div class="orbit orbit4">
                <div class="planet planet4" onclick="openPlanetModal('planet4')"></div>
            </div>

            <!-- Orbit 5 with Planet 5 -->
            <div class="orbit orbit5">
                <div class="planet planet5" onclick="openPlanetModal('planet5')"></div>
            </div>

            <!-- Orbit 6 with Planet 6 -->
            <div class="orbit orbit6">
                <div class="planet planet6" onclick="openPlanetModal('planet6')"></div>
            </div>

            <!-- Orbit 7 with Planet 7 -->
            <div class="orbit orbit7">
                <div class="planet planet7" onclick="openPlanetModal('planet7')"></div>
            </div>

            <!-- Orbit 8 with Planet 8 -->
            <div class="orbit orbit8">
                <div class="planet planet8" onclick="openPlanetModal('planet8')"></div>
            </div>
        </div>
    </div>

    <!-- Modals for each planet -->
    <!-- Planet 1 Modal -->
    <div id="planet1-modal" class="planet-modal">
        <div class="planet-modal-content">
            <h2>Planet Mercury</h2>
            <p>Mercury is the smallest planet in our solar system and closest to the sun.</p>
            <button class="planet-modal-close" onclick="closePlanetModal('planet1')">&times; Close</button>
        </div>
    </div>
    <!-- Planet 2 Modal -->
    <div id="planet2-modal" class="planet-modal">
        <div class="planet-modal-content">
            <h2>Planet Venus</h2>
            <p>Venus is the second planet from the sun and is known for its thick, toxic atmosphere.</p>
            <button class="planet-modal-close" onclick="closePlanetModal('planet2')">&times; Close</button>
        </div>
    </div>
    <!-- Planet 3 Modal -->
    <div id="planet3-modal" class="planet-modal">
        <div class="planet-modal-content">
            <h2>Planet Earth</h2>
            <p>Earth is our home planet, the third from the sun, and the only one known to support life.</p>
            <button class="planet-modal-close" onclick="closePlanetModal('planet3')">&times; Close</button>
        </div>
    </div>
    <!-- Planet 4 Modal -->
    <div id="planet4-modal" class="planet-modal">
        <div class="planet-modal-content">
            <h2>Planet Mars</h2>
            <p>Mars is the fourth planet from the sun, known as the Red Planet due to its iron oxide-rich surface.</p>
            <button class="planet-modal-close" onclick="closePlanetModal('planet4')">&times; Close</button>
        </div>
    </div>
    <!-- Planet 5 Modal -->
    <div id="planet5-modal" class="planet-modal">
        <div class="planet-modal-content">
            <h2>Planet Jupiter</h2>
            <p>Jupiter is the largest planet in our solar system, known for its Great Red Spot and many moons.</p>
            <button class="planet-modal-close" onclick="closePlanetModal('planet5')">&times; Close</button>
        </div>
    </div>
    <!-- Planet 6 Modal -->
    <div id="planet6-modal" class="planet-modal">
        <div class="planet-modal-content">
            <h2>Planet Saturn</h2>
            <p>Saturn is famous for its beautiful rings and is the sixth planet from the sun.</p>
            <button class="planet-modal-close" onclick="closePlanetModal('planet6')">&times; Close</button>
        </div>
    </div>
    <!-- Planet 7 Modal -->
    <div id="planet7-modal" class="planet-modal">
        <div class="planet-modal-content">
            <h2>Planet Uranus</h2>
            <p>Uranus is known for its blue-green color and unusual sideways rotation.</p>
            <button class="planet-modal-close" onclick="closePlanetModal('planet7')">&times; Close</button>
        </div>
    </div>
    <!-- Planet 8 Modal -->
    <div id="planet8-modal" class="planet-modal">
        <div class="planet-modal-content">
            <h2>Planet Neptune</h2>
            <p>Neptune, the farthest known planet in our solar system, is known for its deep blue color.</p>
            <button class="planet-modal-close" onclick="closePlanetModal('planet8')">&times; Close</button>
        </div>
    </div>

    <!-- JavaScript for Modals -->
    <!-- JavaScript for Modals -->
  <script>
    function openPlanetModal(planetId) {
      document.getElementById(planetId + '-modal').style.display = 'flex';
    }
    function closePlanetModal(planetId) {
      document.getElementById(planetId + '-modal').style.display = 'none';
    }
  </script>

    <!-- Custom JS for 3D Perspective -->
    <script>
        // Wrap the .solar-system element in a .solar-system-wrapper for 3D perspective.
        document.addEventListener("DOMContentLoaded", () => {
          const solarSystem = document.querySelector('.solar-system');
          const wrapper = document.createElement('div');
          wrapper.className = 'solar-system-wrapper';
          solarSystem.parentNode.insertBefore(wrapper, solarSystem);
          wrapper.appendChild(solarSystem);
          // Apply a 45° tilt on the X-axis to view from above (you can adjust this angle)
          solarSystem.style.transform = 'rotateX(45deg)';
        });
      </script>
</body>

</html>
