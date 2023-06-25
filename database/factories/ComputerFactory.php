<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ComputerFactory extends Factory{
    public function definition(){
        return [
            'name'=>$this->faker->name(),
            'image'=>$this->faker->name(),
            'price'=>random_int(10000, 100000),
        ];
    }
}
