<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\User;
use Illuminate\Http\Request;

class PlayerCommentController extends Controller
{
    public function store(Player $player)
    {
        request()->validate([
            'body' => 'required'
        ]);

        $player->comments()->create([
            'user_id' => request()->user()->id,
            'body' => request('body')
        ]);

        return back();
    }
}
