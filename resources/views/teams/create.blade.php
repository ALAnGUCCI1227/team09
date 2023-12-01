{{-- resources/views/teams/create.blade.php --}}
@extends('layouts.app')

@section('title', 'Create Team')

@section('content')
    <h2>Create Team</h2>
    <form method="POST" action="{{ route('teams.store') }}">
        @csrf  <!-- CSRF token for security -->

        <label for="name">Team Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="zone">Team Zone:</label>
        <input type="text" id="zone" name="zone" required>

        <label for="city">Team City:</label>
        <input type="text" id="city" name="city" required>

        <button type="submit">Create Team</button>
    </form>
@endsection
