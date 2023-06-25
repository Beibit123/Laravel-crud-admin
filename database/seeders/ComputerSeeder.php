<?php

namespace Database\Seeders;

use App\Models\Computer;
use Illuminate\Database\Seeder;

class ComputerSeeder extends Seeder{
    public function run(){
        Computer::factory()->count(2)->create();
    }
}
