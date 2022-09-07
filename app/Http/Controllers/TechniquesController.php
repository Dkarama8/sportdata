<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class TechniquesController extends Controller
{
    public function show(Player $player)
    {
        return view('players.player-techniques', [
            'player' => $player,
        ]);
    }

    public function store(Player $player)
    {
        request()->validate([
            'catch_pass' => 'required',
            'dribble' => 'required',
            'tactics_individual' => 'required',
            'tactics_group' => 'required',
            'tactics_colective' => 'required'
        ]);

        $player->techniques()->create([
            'catch_pass' => request('catch_pass'),
            'dribble' => request('dribble'),
            'tactics_individual' => request('tactics_individual'),
            'tactics_group' => request('tactics_group'),
            'tactics_colective' => request('tactics_colective')
        ]);

        return back()->with('success', 'Podaci uspješno uneseni!');
    }
}
