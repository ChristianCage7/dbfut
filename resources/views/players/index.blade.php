@extends('layouts.app')

@section('content')
    <h1>Lista de jugadores</h1>

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
                <tr style="border-bottom:1px solid #eee;">

                    <td style="padding:10px; display:flex; align-items:center; gap:10px;">

                        <img src="https://via.placeholder.com/40" style="width:40px; height:40px; border-radius:50%;">

                        <a href="/players/{{ $player->id }}">
                            {{ $player->name }}
                        </a>

                    </td>

                    <td>
                        <a href="/players?position={{ $player->position }}">
                            {{ $player->position }}
                        </a>
                    </td>

                    <td>
                        <a href="/players?age={{ $player->age }}">
                            {{ $player->age }}
                        </a>
                    </td>

                    <td style="display:flex; align-items:center; gap:6px;">

                        <img src="https://via.placeholder.com/20" style="width:20px;">

                        <a href="/players?team={{ $player->team }}">
                            {{ $player->team }}
                        </a>

                    </td>

                    <td style="display:flex; align-items:center; gap:6px;">

                        <img src="https://flagcdn.com/w20/ar.png" style="width:20px;">

                        <a href="/players?nationality={{ $player->nationality }}">
                            {{ $player->nationality }}
                        </a>

                    </td>

                    <td>

                        @if ($player->market_value)
                            <a href="/players?value={{ $player->market_value }}">
                                €{{ number_format($player->market_value) }}
                            </a>
                        @else
                            -
                        @endif

                    </td>

                </tr>
            @endforeach

        </tbody>

    </table>
@endsection
