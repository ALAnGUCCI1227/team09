{{-- resources/views/teams/show.blade.php --}}
@extends('layouts.app')

@section('title', 'Team Details')

@section('content')
    <h2>Team Details</h2>
    <div>
        <p>Name: {{ $team->name }}</p>
        <p>City: {{ $team->city }}</p>
        <p>Players:</p>
        <ul>
            @forelse ($team->players as $player)
                <li>{{ $player->player }} - {{ $player->character_position }}</li>
            @empty
                <li>No players in this team.</li>
            @endforelse
        </ul>
    </div>
@endsection
