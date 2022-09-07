<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function show(Player $player)
    {
        return view('players.player-testing', [
            'player' => $player,
        ]);
    }

    public function store(Player $player)
    {
        request()->validate([
            'speed' => 'required',
            'agility' => 'required',
            'flexibility' => 'required',
            'strength' => 'required',
            'endurance' => 'required'
        ]);

        $player->testing()->create([
            'speed' => request('speed'),
            'agility' => request('agility'),
            'flexibility' => request('flexibility'),
            'strength' => request('strength'),
            'endurance' => request('endurance')
        ]);

        return back()->with('success', 'Podaci uspješno uneseni!');
    }
}
