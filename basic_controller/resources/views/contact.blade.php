<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md mx-auto p-6 bg-white rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Contact</h1>
        <p class="mb-2">Adres: Fictieve Straat 123, 1000 AB Amsterdam</p>
        <p class="mb-2">Telefoon: 012-3456789</p>
        <p class="mb-4">Email: info@fictiefbedrijf.nl</p>
        <a href="{{ route('Pages.home') }}" class="bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600 transition">Terug naar home</a>
    </div>
</body>
</html>