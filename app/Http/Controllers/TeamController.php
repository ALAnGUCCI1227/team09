<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{

    public function index()
    {
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }



    public function create()
    {
        return view('teams.create');
    }

    public function store(Request $request)
    {
        $team = Team::create($request->all());
        return redirect()->route('teams.index');
    }

    public function show($id)
    {
        $team = Team::with('players')->findOrFail($id);
        return view('teams.show', compact('team'));
    }
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('teams.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);
        $team->update($request->all());
        return redirect()->route('teams.index');
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();
        return redirect()->route('teams.index');
    }
}
