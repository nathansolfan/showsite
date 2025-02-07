<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Solar System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .highlight {
    position: absolute;
    inset: 0;
    border-radius: inherit;
    animation: firstPlanetRenderRotater 12s infinite linear;
  }

    </style>
  </head>
  <body>
    <div class="system-solar">
      <div class="planets-container">
        <div class="sun"></div>
        <div class="planet-index" id="first-planet-index">
          <div class="route">
            <div class="planet-container" id="first-planet-container">
                <div id="first-planet" class="planet">
                    <div class="highlight"></div>
                  </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

