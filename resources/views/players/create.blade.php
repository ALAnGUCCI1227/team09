{{-- resources/views/players/create.blade.php --}}
@extends('layouts.app')

@section('title', 'Create Player')

@section('content')
    <h2>Create Player</h2>
    <form method="POST" action="{{ route('players.store') }}">
        @csrf  {{-- CSRF token for security --}}

        <label for="player">Name:</label>
        <input type="text" id="player" name="player" required><br>

        <label for="character_position">Position:</label>
        <input type="text" id="character_position" name="character_position" required><br>

        <label for="tid">Team:</label>
        <select id="tid" name="tid" required>
            @foreach ($teams as $team)
                <option value="{{ $team->id }}">{{ $team->name }}</option>
            @endforeach
        </select><br>

        <label for="mouse">Mouse:</label>
        <input type="text" id="mouse" name="mouse"><br>

        <label for="hz">HZ:</label>
        <input type="number" id="hz" name="hz"><br>

        <label for="dpi">DPI:</label>
        <input type="number" id="dpi" name="dpi"><br>

        <label for="sens">Sens:</label>
        <input type="text" id="sens" name="sens"><br>

        <label for="scope_sensitivity">Scope Sensitivity:</label>
        <input type="text" id="scope_sensitivity" name="scope_sensitivity"><br>

        <label for="screen">Screen:</label>
        <input type="text" id="screen" name="screen"><br>

        <label for="graphics_card">Graphics Card:</label>
        <input type="text" id="graphics_card" name="graphics_card"><br>

        <label for="resolution">Resolution:</label>
        <input type="text" id="resolution" name="resolution"><br>

        <label for="scaling_ratio">Scaling Ratio:</label>
        <input type="text" id="scaling_ratio" name="scaling_ratio"><br>

        <label for="display_mode">Display Mode:</label>
        <input type="text" id="display_mode" name="display_mode"><br>

        <label for="mouse_pad">Mouse Pad:</label>
        <input type="text" id="mouse_pad" name="mouse_pad"><br>

        <label for="keyboard">Keyboard:</label>
        <input type="text" id="keyboard" name="keyboard"><br>

        <label for="earphone">Earphone:</label>
        <input type="text" id="earphone" name="earphone"><br>

        <button type="submit">Create Player</button>
    </form>
@endsection
