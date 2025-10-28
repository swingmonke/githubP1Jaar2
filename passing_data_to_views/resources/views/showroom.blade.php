
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/cs/apps/app.css')
    <title>Document</title>
</head>
<body class="bg-blue-200">
    <div style="background-color: red;">
        <a href="/">Showroom</a>
        <a href="/contact">Contact</a>
    </div>
    <div style="background-color: green;">
    <h1>De Showroom</h1>
    <table cellpadding="8" >
        <thead>
            <tr>
                <th>Brand</th>
                <th>Model</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data->showroom as $items)
                <tr>
                    <td>{{ $items['brand'] }}</td>
                    <td>{{ $items['model'] }}</td>
                    <td>{{ $items['price'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>