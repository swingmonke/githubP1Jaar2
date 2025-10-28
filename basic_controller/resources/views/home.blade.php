<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md mx-auto p-6 bg-white rounded shadow">
        <h1 class="text-2xl font-bold mb-6 text-center">Welkom bij ons bedrijf</h1>
        <div class="flex flex-col md:flex-row gap-4">
            <a href="{{ route('Pages.contact') }}" class="bg-blue-500 text-white py-2 px-4 rounded text-center hover:bg-blue-600 transition">Contact</a>
            <a href="{{ route('Pages.aboutUs') }}" class="bg-green-500 text-white py-2 px-4 rounded text-center hover:bg-green-600 transition">Over ons</a>
            <a href="{{ route('Pages.ourTeam') }}" class="bg-purple-500 text-white py-2 px-4 rounded text-center hover:bg-purple-600 transition">Ons team</a>
        </div>
    </div>
</body>
</html>