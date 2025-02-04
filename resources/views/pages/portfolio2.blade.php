<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solar System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="solar-system-wrapper">
        <div class="solar-system">
            <div class="sun"></div>
            <div class="orbit">
                <div class="planet-container">
                    <div class="rocket-icon">🚀</div> <!-- Rocket inside planet, stays upright -->
                    <div class="planet"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
