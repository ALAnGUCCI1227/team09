<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Team;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return view('players.index', compact('players'));
    }

    public function create()
    {
        $teams = Team::all();
        return view('players.create', compact('teams'));
    }

    public function store(Request $request)
    {
        $request->validate(['tid' => 'required|exists:teams,id',
        'character_position' => 'required',

        ]);
        $player = Player::create($request->all());
        return redirect()->route('players.index');
    }

    public function show($id)
    {
        $player = Player::with('team')->findOrFail($id);
        return view('players.show', compact('player'));

    }

    public function edit($id)
    {
        $player = Player::findOrFail($id);
        $teams = Team::all();

        return view('players.edit', compact('player', 'teams'));
    }

    public function update(Request $request, $id)
    {
        $player = Player::findOrFail($id);
        $player->update($request->all());
        return redirect()->route('players.index');
    }

    public function destroy($id)
    {
        $player = Player::findOrFail($id);
        $player->delete();
        return redirect()->route('players.index');
    }
}
