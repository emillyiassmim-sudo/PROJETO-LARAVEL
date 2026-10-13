<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cidades</title>
</head>
<body>
    <h1>Cidades</h1>

<table>
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>PAÍS</th>
        <th>POPULAÇÃO</th>
        <th>DISTRITO</th>
    </tr>
    @foreach($cities as $city)
    <tr>
        <td>{{$city->ID}}</td>
        <td>{{$city->name}}</td>
        <td>{{$city->CountryCode}}</td>
        <td>{{$city->Population}}</td>
        <td>{{$city->District}}</td>
    </tr>
    @endforeach
</table>
</body>
</html>