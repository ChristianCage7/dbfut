@extends('layouts.app')

@section('content')

    <h1>Resultados</h1>

    @if ($players->count() > 0)
        <table style="width:100%; border-collapse: collapse;">

            <thead>
                <tr style="border-bottom:2px solid #ccc;">
                    <th style="text-align:left; padding:10px;">Jugador</th>
                    <th>Posición</th>
                    <th>Edad</th>
                    <th>Club</th>
                    <th>Nacionalidad</th>
                    <th>Valor</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($players as $player)
                    <tr class="player-row" data-url="/players/{{ $player->id }}"
                        style="border-bottom:1px solid #eee; cursor:pointer;">

                        <td style="padding:10px; display:flex; align-items:center; gap:10px;">

                            <img src="https://via.placeholder.com/40" style="width:40px; height:40px; border-radius:50%;">

                            {{ $player->name }}

                        </td>

                        <td>{{ $player->position }}</td>

                        <td>{{ $player->age }}</td>

                        <td>{{ $player->team }}</td>

                        <td>{{ $player->nationality }}</td>

                        <td>

                            @if ($player->market_value)
                                €{{ number_format($player->market_value) }}
                            @else
                                -
                            @endif

                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    @else
        <p>No se encontraron resultados.</p>
    @endif

@endsection
