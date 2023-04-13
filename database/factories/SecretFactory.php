<?php

namespace Database\Factories;

use App\Models\Secret;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SecretFactory extends Factory
{
    protected $model = Secret::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'value' => $this->faker->sentence(),
            'expires_at' => $this->faker->dateTimeBetween('+1 day', '+1 month'),
        ];
    }
}
