<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index leveranciers</title>
</head>
<body>
    <h1>Leveranciers Info</h1>
    <a href="{{ route('home') }}">Back to Home</a>
    <ul>
        @foreach($leveranciers as $leverancier)
            <li>{{ $leverancier->bedrijfsnaam }} - {{ $leverancier->email }}</li>
            <a href="{{ route('leveranciers_info.show', $leverancier->leveranciersnummer) }}">View Details</a>
        @endforeach
    </ul>
    <a href="{{ route('leveranciers_info.create') }}">Create New Leverancier</a>
    
</body>
</html>