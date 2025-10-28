<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show leveranciers</title>
</head>
<body>
    <h1>Leverancier Details</h1>
    <a href="{{ route('leveranciers_info.index') }}">Back to List</a>
    <p><strong>Bedrijfsnaam:</strong> {{ $leveranciers->bedrijfsnaam }}</p>
    <p><strong>Email:</strong> {{ $leveranciers->email }}</p>
    <p><strong>Telefoon:</strong> {{ $leveranciers->telefoonnummer }}</p>
    <p><strong>Adres:</strong> {{ $leveranciers->adres }}</p>
</body>
</html>