@extends('layouts.app')

@section('content')
    <div style="max-width:800px; margin:auto;">

        <div style="display:flex; border:1px solid #ccc; padding:20px; margin-top:20px;">

            <div style="width:150px; height:150px; background:#eee; margin-right:20px;">
                <!-- Aquí después irá la foto -->
            </div>

            <div>
                <h1>{{ $player->name }}</h1>

                <p><strong>Equipo:</strong> {{ $player->team }}</p>

                <p><strong>Posición:</strong> {{ $player->position }}</p>

                <p><strong>Edad:</strong> {{ $player->age }}</p>

                <p><strong>Nacionalidad:</strong> {{ $player->nationality }}</p>

                <p><strong>Valor de mercado:</strong>
                    @if ($player->market_value)
                        €{{ number_format($player->market_value) }}
                    @else
                        No disponible
                    @endif
                </p>
            </div>

        </div>

    </div>
@endsection
