<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ToDo>
 */
class ToDoFactory extends Factory
{


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $userid = User::first()->id;
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text(30),
            'is_finished' => false,
            'user_id' => $userid
        ];
    }
}
