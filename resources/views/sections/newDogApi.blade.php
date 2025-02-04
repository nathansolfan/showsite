<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Solar System Animation - 8 Planets</title>
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
    }

    /* The central "sun" */
    .sun {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 80px;
      height: 80px;
      margin-top: -40px;
      margin-left: -40px;
      background: yellow;
      border-radius: 50%;
      box-shadow: 0 0 20px yellow;
    }

    /* Common style for each orbit path (for visual guidance, optional) */
    .orbit {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border: 1px dashed rgba(255, 255, 255, 0.2);
      border-radius: 50%;
    }

    /* Each planet is absolutely positioned inside its orbit */
    .planet {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 20px;
      height: 20px;
      background-color: #fff;
      border-radius: 50%;
    }

    /* Keyframe animations for each orbit - these combine rotation and translation */
    @keyframes orbit1 {
      from { transform: rotate(0deg) translate(0, -75px); }
      to   { transform: rotate(360deg) translate(0, -75px); }
    }
    @keyframes orbit2 {
      from { transform: rotate(0deg) translate(0, -100px); }
      to   { transform: rotate(360deg) translate(0, -100px); }
    }
    @keyframes orbit3 {
      from { transform: rotate(0deg) translate(0, -125px); }
      to   { transform: rotate(360deg) translate(0, -125px); }
    }
    @keyframes orbit4 {
      from { transform: rotate(0deg) translate(0, -150px); }
      to   { transform: rotate(360deg) translate(0, -150px); }
    }
    @keyframes orbit5 {
      from { transform: rotate(0deg) translate(0, -175px); }
      to   { transform: rotate(360deg) translate(0, -175px); }
    }
    @keyframes orbit6 {
      from { transform: rotate(0deg) translate(0, -200px); }
      to   { transform: rotate(360deg) translate(0, -200px); }
    }
    @keyframes orbit7 {
      from { transform: rotate(0deg) translate(0, -225px); }
      to   { transform: rotate(360deg) translate(0, -225px); }
    }
    @keyframes orbit8 {
      from { transform: rotate(0deg) translate(0, -250px); }
      to   { transform: rotate(360deg) translate(0, -250px); }
    }

    /* Orbit paths for visual reference */
    .orbit1 { width: 150px; height: 150px; }
    .orbit2 { width: 200px; height: 200px; }
    .orbit3 { width: 250px; height: 250px; }
    .orbit4 { width: 300px; height: 300px; }
    .orbit5 { width: 350px; height: 350px; }
    .orbit6 { width: 400px; height: 400px; }
    .orbit7 { width: 450px; height: 450px; }
    .orbit8 { width: 500px; height: 500px; }

    /* Planet styles with their orbit animations and durations */
    .planet1 {
      animation: orbit1 4s linear infinite;
      background-color: #BDB76B; /* Mercury-like color */
    }
    .planet2 {
      animation: orbit2 6s linear infinite;
      background-color: #DAA520; /* Venus-like color */
    }
    .planet3 {
      animation: orbit3 8s linear infinite;
      background-color: #1E90FF; /* Earth-like (blue) */
    }
    .planet4 {
      animation: orbit4 10s linear infinite;
      background-color: #FF4500; /* Mars-like (reddish) */
    }
    .planet5 {
      animation: orbit5 12s linear infinite;
      background-color: #FFD700; /* Jupiter-like (gold) */
    }
    .planet6 {
      animation: orbit6 14s linear infinite;
      background-color: #87CEFA; /* Saturn-like (light blue) */
    }
    .planet7 {
      animation: orbit7 16s linear infinite;
      background-color: #66CDAA; /* Uranus-like (aqua) */
    }
    .planet8 {
      animation: orbit8 18s linear infinite;
      background-color: #4169E1; /* Neptune-like (royal blue) */
    }
  </style>
</head>
<body>
  <div class="solar-system">
    <div class="sun"></div>

    <!-- Orbit 1 with Planet 1 -->
    <div class="orbit orbit1">
      <div class="planet planet1"></div>
    </div>

    <!-- Orbit 2 with Planet 2 -->
    <div class="orbit orbit2">
      <div class="planet planet2"></div>
    </div>

    <!-- Orbit 3 with Planet 3 -->
    <div class="orbit orbit3">
      <div class="planet planet3"></div>
    </div>

    <!-- Orbit 4 with Planet 4 -->
    <div class="orbit orbit4">
      <div class="planet planet4"></div>
    </div>

    <!-- Orbit 5 with Planet 5 -->
    <div class="orbit orbit5">
      <div class="planet planet5"></div>
    </div>

    <!-- Orbit 6 with Planet 6 -->
    <div class="orbit orbit6">
      <div class="planet planet6"></div>
    </div>

    <!-- Orbit 7 with Planet 7 -->
    <div class="orbit orbit7">
      <div class="planet planet7"></div>
    </div>

    <!-- Orbit 8 with Planet 8 -->
    <div class="orbit orbit8">
      <div class="planet planet8"></div>
    </div>
  </div>
</body>
</html>
