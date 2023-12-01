<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayersTableSeeder extends Seeder
{
    public function run()
    {
        Player::factory()->count(50)->create();
    }
}
