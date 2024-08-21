<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Tailwind</title>
    <link rel="stylesheet" href="{{ asset('build/assets/app-BqFgHIMm.css') }}">
    <script src="{{ asset('build/assets/app-CUzlGF_f.js') }}" defer></script>
</head>
<body class="bg-gray-100 flex flex-col items-center justify-center h-screen space-y-6">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-800">Tailwind CSS is working!</h1>
        <p class="text-lg text-gray-600 mt-4">If you see this, Tailwind CSS is successfully integrated.</p>
    </div>

    <div class="flex space-x-4">
        <!-- Red Box -->
        <div class="bg-red-500 text-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold">Red Box</h2>
            <p class="mt-2">This is a red box with white text.</p>
        </div>

        <!-- Blue Box -->
        <div class="bg-blue-500 text-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold">Blue Box</h2>
            <p class="mt-2">This is a blue box with white text.</p>
        </div>

        <!-- Green Box -->
        <div class="bg-green-500 text-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold">Green Box</h2>
            <p class="mt-2">This is a green box with white text.</p>
        </div>
    </div>

    <div class="mt-6">
        <p class="text-sm text-gray-500">Below are some colored text examples:</p>
        <p class="text-lg text-red-500">This is red text.</p>
        <p class="text-lg text-blue-500">This is blue text.</p>
        <p class="text-lg text-green-500">This is green text.</p>
        <p class="text-lg text-yellow-500">This is yellow text.</p>
        <p class="text-lg text-purple-500">This is purple text.</p>
    </div>
</body>
</html>
