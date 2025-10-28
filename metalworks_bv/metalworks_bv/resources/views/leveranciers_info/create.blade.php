<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create leverancier</title>
</head>
<body>
    <h1>Create New Leverancier</h1>
    <a href="{{ route('leveranciers_info.index') }}">Back to List</a>
    <form action="{{ route('leveranciers_info.store') }}" method="POST">
        @csrf
        <label for="bedrijfsnaam">Bedrijfsnaam:</label>
        <input type="text" id="bedrijfsnaam" name="bedrijfsnaam" required><br>

        <label for="contactpersoon">Contactpersoon:</label>
        <input type="text" id="contactpersoon" name="contactpersoon" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="telefoonnummer">Telefoonnummer:</label>
        <input type="text" id="telefoonnummer" name="telefoonnummer" required><br>

        <label for="adres">Adres:</label>
        <input type="text" id="adres" name="adres" required><br>

        <label for="postcode">Postcode:</label>
        <input type="text" id="postcode" name="postcode" required><br>

        <label for="plaats">Plaats:</label>
        <input type="text" id="plaats" name="plaats" required><br>

        <label for="land">Land:</label>
        <input type="text" id="land" name="land" required><br>

        <label for="kvk_nummer">KVK Nummer:</label>
        <input type="text" id="kvk_nummer" name="kvk_nummer" required><br>

        <label for="btw_nummer">BTW Nummer:</label>
        <input type="text" id="btw_nummer" name="btw_nummer" required><br>

        <label for="bankrekening">Bankrekening:</label>
        <input type="text" id="bankrekening" name="bankrekening" required><br>

        <button type="submit">Create Leverancier</button>
    </form>
    
</body>
</html>