@extends('layouts.app')

@section('content')

<h1>{{ $player->name }}</h1>

<p><strong>Team:</strong> {{ $player->team }}</p>

<p><strong>Position:</strong> {{ $player->position }}</p>

<p><strong>Age:</strong> {{ $player->age }}</p>

<p><strong>Nationality:</strong> {{ $player->nationality }}</p>

@endsection