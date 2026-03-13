<div
    style="
border:1px solid #ddd;
padding:15px;
margin:10px;
width:250px;
border-radius:6px;
background:white;
box-shadow:0 2px 5px rgba(0,0,0,0.1);
">
    <a href="/players/{{ $player->id }}">
        <h3>{{ $player->name }}</h3>
    </a>

    <p><strong>Equipo:</strong> {{ $player->team }}</p>

    <p><strong>Posición:</strong> {{ $player->position }}</p>

    <p><strong>Edad:</strong> {{ $player->age }}</p>

    <p><strong>Nacionalidad:</strong> {{ $player->nationality }}</p>

    <p><strong>Valor:</strong>
        @if ($player->market_value)
            €{{ number_format($player->market_value) }}
        @else
            No disponible
        @endif
    </p>

</div>
