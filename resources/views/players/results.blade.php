<!DOCTYPE html>
<html>

<head>
    <title>Resultados</title>
</head>

<body>

    <h1>Resultados</h1>

    @if (isset($data['results']) && count($data['results']) > 0)

        @foreach ($data['results'] as $player)
            <div style="border:1px solid black; margin:10px; padding:10px;">

                <h3>{{ $player['name'] ?? 'Sin nombre' }}</h3>

                <p>Posición: {{ $player['position'] ?? 'N/A' }}</p>
                <p>Edad: {{ $player['age'] ?? 'N/A' }}</p>
                <p>Club: {{ $player['club']['name'] ?? 'Sin club' }}</p>

                <p>Nacionalidad:
                    {{ isset($player['nationalities']) ? implode(', ', $player['nationalities']) : 'N/A' }}
                </p>

                <p>Valor de mercado: €{{ $player['marketValue'] ?? 'No disponible' }}</p>

            </div>
        @endforeach
    @else
        <p>No se encontraron resultados.</p>

    @endif

</body>

</html>
