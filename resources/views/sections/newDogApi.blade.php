<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animation Demo</title>
  <!-- Include GSAP from CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: space-around;
      min-height: 100vh;
      flex-direction: column;
      margin: 0;
      background-color: #f0f0f0;
    }
    .box {
      width: 150px;
      height: 150px;
      margin: 1rem;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      color: #fff;
      border-radius: 10px;
    }
    .gradient-green {
      background: linear-gradient(135deg, #6ee7b7, #3b82f6);
    }
    .gradient-purple {
      background: linear-gradient(135deg, #a78bfa, #8b5cf6);
    }
    .gradient-blue {
      background: linear-gradient(135deg, #60a5fa, #3b82f6);
    }
  </style>
</head>
<body>

    <button onclick="reloadPage()" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors duration-300">
        Reload Page
      </button>


  <div class="box gradient-green green">Green</div>
  <div class="box gradient-purple purple">Purple</div>
  <div class="box gradient-blue blue">Blue</div>

  <script>
    function reloadPage() {
    location.reload();
}

    // Animate the element with the class "green": rotate 360° and move 100px to the right.
    gsap.to(".green", { rotation: 360, x: 100, duration: 1 });

    // Animate the element with the class "purple": rotate -360° and move from 100px left.
    gsap.from(".purple", { rotation: -360, x: -100, duration: 1 });

    // Animate the element with the class "blue": move from 100px left to 100px right with a 360° rotation.
    gsap.fromTo(".blue", { x: -100 }, { rotation: 360, x: 100, duration: 1 });
  </script>
</body>
</html>
