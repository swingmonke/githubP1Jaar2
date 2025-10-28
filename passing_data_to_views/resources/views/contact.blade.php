<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/cs/apps/app.css')
    <title>Document</title>
</head>
<body>
    <div style="background-color: red;">
        <a href="/">Showroom</a>
        <a href="/contact">Contact</a>
    </div>
    <div style="background-color: yellow;">
    <h1>Contact Page</h1>
    <p>This is the contact page.</p>
        
    <table cellpadding="8">
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>{{ $data->company->name }}</td>
            <td>{{ $data->company->address }}</td>
            <td>{{ $data->company->phone }}</td>
            <td>{{ $data->company->email }}</td>
        </tr>
    </table>
    </div>

</body>
</html>