<!DOCTYPE html>
<html>
<head>
    <title>Buscar jugador</title>
</head>
<body>

<h1>Buscar jugador</h1>

<form method="POST" action="/search-player">
    @csrf
    <input type="text" name="query" placeholder="Ej: messi">
    <button type="submit">Buscar</button>
</form>

</body>
</html>