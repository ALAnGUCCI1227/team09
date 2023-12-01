{{-- resources/views/teams/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Teams List')

@section('content')
    <h2>Teams</h2>
    <a href="{{ route('teams.create') }}">new team</a>
    <ul>
        @foreach ($teams as $team)
            <li>{{ $team->name }} - {{ $team->city }}
                <a href="{{ route('teams.show', $team->id) }}">Show</a>
                <a href="{{ route('teams.edit', $team->id) }}">Edit</a>
            </li>

        @endforeach
    </ul>
@endsection
