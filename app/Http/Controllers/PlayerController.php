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

        $response = Http::get(
            "https://transfermarkt-api.fly.dev/players/search/$query?pageNumber=1"
        );

        $data = $response->json();

        return view('players.results', compact('data'));
    }

    public function test()
    {
        $response = Http::get(
            'https://transfermarkt-api.fly.dev/players/28003'
        );

        $player = $response->json();

        dd($player);
    }
}
