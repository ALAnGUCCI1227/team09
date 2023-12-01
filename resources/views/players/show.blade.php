{{-- resources/views/players/show.blade.php --}}
@extends('layouts.app')

@section('title', 'Player Details')

@section('content')
    <h2>Player Details</h2>
    <br>
    <div>
        <div class="detail">
            <strong>ID:</strong> {{ $player->id }}
        </div>
        <div class="detail">
            <strong>Name:</strong> {{ $player->player }}
        </div>
        <div class="detail">
            <strong>Position:</strong> {{ $player->character_position }}
        </div>
        <div class="detail">
            <strong>Team:</strong> {{ $player->team->name ?? 'Not assigned' }}
        </div>
        <div class="detail">
            <strong>Mouse:</strong> {{ $player->mouse }}
        </div>
        <div class="detail">
            <strong>Hz:</strong> {{ $player->hz }}
        </div>
        <div class="detail">
            <strong>DPI:</strong> {{ $player->dpi }}
        </div>
        <div class="detail">
            <strong>Sensitivity:</strong> {{ $player->sens }}
        </div>
        <div class="detail">
            <strong>Scope Sensitivity:</strong> {{ $player->scope_sensitivity }}
        </div>
        <div class="detail">
            <strong>Screen:</strong> {{ $player->screen }}
        </div>
        <div class="detail">
            <strong>Graphics Card:</strong> {{ $player->graphics_card }}
        </div>
        <div class="detail">
            <strong>Resolution:</strong> {{ $player->resolution }}
        </div>
        <div class="detail">
            <strong>Scaling Ratio:</strong> {{ $player->scaling_ratio }}
        </div>
        <div class="detail">
            <strong>Display Mode:</strong> {{ $player->display_mode }}
        </div>
        <div class="detail">
            <strong>Mouse Pad:</strong> {{ $player->mouse_pad }}
        </div>
        <div class="detail">
            <strong>Keyboard:</strong> {{ $player->keyboard }}
        </div>
        <div class="detail">
            <strong>Earphone:</strong> {{ $player->earphone }}
        </div>

    </div>
@endsection

