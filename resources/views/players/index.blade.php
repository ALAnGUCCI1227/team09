{{-- resources/views/players/index.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Player List</h1>
    <a href="{{ route('players.create') }}">Add player</a>
    <ul>
        @foreach ($players as $player)
            <li>
                {{ $player->player }} - {{ $player->character_position }}
                <a href="{{ route('players.show', $player->id) }}">Check</a>
                <a href="{{ route('players.edit', $player->id) }}">Edit</a>
            </li>
        @endforeach
    </ul>
@endsection
