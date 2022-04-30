<?php

namespace Database\Factories;

use App\Models\Entity;
use Amaia\Base\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Entity::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->company(),
            'address_line_1' => $this->faker->address(),
            'address_line_2' => $this->faker->address(),
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
            'created_by' => User::first()->id ??  User::factory(),
            'updated_by' => User::first()->id ??  User::factory(),
        ];
    }
}
