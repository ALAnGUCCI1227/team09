{{-- resources/views/players/edit.blade.php --}}
@extends('layouts.app')

@section('title', 'Edit Player')

@section('content')
    <h2>Edit Player</h2>
    <form method="POST" action="{{ route('players.update', $player->id) }}">
        @csrf
        @method('PATCH')

        <label for="tid">Team:</label>
        <select id="tid" name="tid" required>
            @foreach ($teams as $team)
                <option value="{{ $team->id }}" {{ $player->tid == $team->id ? 'selected' : '' }}>
                    {{ $team->name }}
                </option>
            @endforeach
        </select><br>


        <label for="character_position">Character Position:</label>
        <input type="text" id="character_position" name="character_position" value="{{ $player->character_position }}" required>
        <br>

        <label for="mouse">Mouse:</label>
        <input type="text" id="mouse" name="mouse" value="{{ $player->mouse }}" required>
        <br>

        <label for="hz">Hz:</label>
        <input type="number" id="hz" name="hz" value="{{ $player->hz }}" required>
        <br>

        <label for="dpi">DPI:</label>
        <input type="number" id="dpi" name="dpi" value="{{ $player->dpi }}" required>
        <br>

        <label for="sens">Sensitivity:</label>
        <input type="number" step="0.01" id="sens" name="sens" value="{{ $player->sens }}" required>
        <br>

        <label for="scope_sensitivity">Scope Sensitivity:</label>
        <input type="number" step="0.01" id="scope_sensitivity" name="scope_sensitivity" value="{{ $player->scope_sensitivity }}" required>
        <br>

        <label for="screen">Screen:</label>
        <input type="text" id="screen" name="screen" value="{{ $player->screen }}" required>
        <br>

        <label for="graphics_card">Graphics Card:</label>
        <input type="text" id="graphics_card" name="graphics_card" value="{{ $player->graphics_card }}" required>
        <br>

        <label for="resolution">Resolution:</label>
        <input type="text" id="resolution" name="resolution" value="{{ $player->resolution }}" required>
        <br>

        <label for="scaling_ratio">Scaling Ratio:</label>
        <input type="text" id="scaling_ratio" name="scaling_ratio" value="{{ $player->scaling_ratio }}" required>
        <br>

        <label for="display_mode">Display Mode:</label>
        <input type="text" id="display_mode" name="display_mode" value="{{ $player->display_mode }}" required>
        <br>

        <label for="mouse_pad">Mouse Pad:</label>
        <input type="text" id="mouse_pad" name="mouse_pad" value="{{ $player->mouse_pad }}" required>
        <br>

        <label for="keyboard">Keyboard:</label>
        <input type="text" id="keyboard" name="keyboard" value="{{ $player->keyboard }}" required>
        <br>

        <label for="earphone">Earphone:</label>
        <input type="text" id="earphone" name="earphone" value="{{ $player->earphone }}" required>
        <br>

        <button type="submit">Update Player</button><br>
    </form>

    <form method="POST" action="{{ route('players.destroy', $player->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure you want to delete this player?')">Delete Player</button>
    </form>
@endsection
