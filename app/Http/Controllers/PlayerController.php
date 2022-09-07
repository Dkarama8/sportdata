<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PlayerController extends Controller
{
    public function index()
    {
        return view('players.index', [
            'players' => Player::latest()->filter(
                        request(['search', 'category'])
                    )->paginate(9)->withQueryString()
        ]);
    }

    public function show(Player $player)
    {
        return view('players.show', [
            'player' => $player,
        ]);
    }

    public function edit(Player $player)
    {
        return view('players.edit', ['player' => $player]);
    }

    public function update(Player $player)
    {
        $attributes = request()->validate([
            'name' => 'required|max:255|min:3',
            'surname' => 'required|max:255|min:3',
            'slug' => ['required', Rule::unique('players', 'slug')->ignore($player->id)],
            'primary_position' => 'required',
            'secondary_position' => 'required',
            'dominant_hand' => 'required',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'day_of_birth' => 'required',
            'years' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'mother_height' => 'required|numeric',
            'father_height' => 'required|numeric',
            'oib' => 'required|numeric|digits:11',
            'phone_number' => 'required|numeric|digits:10',
            'first_sport' => 'required|max:255|min:2',
            'school' => 'required|max:255|min:2',
            'address' => 'required|max:255|min:2'
        ]);

        $player->update($attributes);

        return back()->with('success', 'Podaci o igraču uspješno zamjenjeni!');
    }

    public function destroy(Player $player)
    {
        $player->delete();

        return redirect('players')->with('success', 'Igrač uspješno pobrisan');
    }

}
