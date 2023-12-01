<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'tid', 'player', 'character_position', 'mouse', 'hz', 'dpi',
        'sens', 'scope_sensitivity', 'screen', 'graphics_card',
        'resolution', 'scaling_ratio', 'display_mode', 'mouse_pad',
        'keyboard', 'earphone'
    ];
    public function team()
    {
        return $this->belongsTo(Team::class, 'tid');
    }
}

