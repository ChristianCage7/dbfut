@extends('layouts.app')

@section('content')
    <h1>Buscar jugador</h1>

    <form method="POST" action="/search-player">
        @csrf
        <input type="text" name="query" placeholder="Ej: messi">
        <button type="submit">Buscar</button>
    </form>
@endsection
