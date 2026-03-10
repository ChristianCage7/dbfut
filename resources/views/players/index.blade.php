<!DOCTYPE html>
<html>
<head>
    <title>Players</title>
</head>
<body>

<h1>Lista de jugadores</h1>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Equipo</th>
        <th>Posición</th>
        <th>Edad</th>
        <th>Nacionalidad</th>
    </tr>

    @foreach($players as $player)
    <tr>
        <td>{{ $player->name }}</td>
        <td>{{ $player->team }}</td>
        <td>{{ $player->position }}</td>
        <td>{{ $player->age }}</td>
        <td>{{ $player->nationality }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>