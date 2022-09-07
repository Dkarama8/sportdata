<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:255|min:3',
            'surname' => 'required|max:255|min:3',
            'slug' => ['required', Rule::unique('players', 'slug')],
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

        Player::create($attributes);

        return redirect('players')->with('success', 'Igrač uspješno registriran.');
    }
}
