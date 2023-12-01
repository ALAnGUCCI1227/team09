{{-- resources/views/teams/edit.blade.php --}}
@extends('layouts.app')
@section('title', 'Edit Team')
@section('content')
    <h2>Edit Team</h2>
    <form method="POST" action="{{ route('teams.update', $team->id) }}">
        @csrf
        @method('PATCH')

        <label for="name">Team Name:</label>
        <input type="text" id="name" name="name" value="{{ $team->name }}" required>

        <label for="zone">Team Zone:</label>
        <input type="text" id="zone" name="zone" value="{{ $team->zone }}" required>

        <label for="city">Team City:</label>
        <input type="text" id="city" name="city" value="{{ $team->city }}" required>

        <button type="submit">Update Team</button>
    </form>

    <form method="POST" action="{{ route('teams.destroy', $team->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure?')">Delete Team</button>
    </form>
@endsection
