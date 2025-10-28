<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over ons</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md mx-auto p-6 bg-white rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Over ons</h1>
        <p class="mb-4">Onze missie is om fictieve bedrijven te helpen groeien met innovatieve oplossingen en een klantgerichte aanpak.</p>
        <a href="{{ route('Pages.home') }}" class="bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600 transition">Terug naar home</a>
    </div>
</body>
</html>