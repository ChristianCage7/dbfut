<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();

        return view('players.index', compact('players'));
    }

    public function searchForm()
    {
        return view('players.search');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $response = Http::withHeaders([
            'User-Agent' => 'Mozilla/5.0'
        ])->get(
            "https://transfermarkt-api.fly.dev/players/search/$query?page_number=1"
        );
        dd($response->json());
        $data = $response->json();

        if (!isset($data['results'])) {
            return view('players.results', ['players' => collect()]);
        }

        $players = collect($data['results'])->map(function ($player) {
            return (object)[
                'name' => $player['name'] ?? 'Sin nombre',
                'team' => $player['club']['name'] ?? 'Sin club',
                'position' => $player['position'] ?? 'N/A',
                'age' => $player['age'] ?? 'N/A',
                'nationality' => isset($player['nationalities'])
                    ? implode(', ', $player['nationalities'])
                    : 'N/A',
                'market_value' => $player['marketValue'] ?? null,
                'id' => $player['id'] ?? null
            ];
        });

        return view('players.results', compact('players'));
    }

    public function test()
    {
        $response = Http::get(
            'https://transfermarkt-api.fly.dev/players/28003'
        );

        $player = $response->json();

        dd($player);
    }

    public function show($id)
    {
        $player = Player::findOrFail($id);

        return view('players.show', compact('player'));
    }
}
