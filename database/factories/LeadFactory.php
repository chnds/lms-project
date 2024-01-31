<?php

namespace Database\Factories;

use App\Models\Lead;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lead::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'telefone' => $this->faker->phoneNumber,
            'empresa' => $this->faker->company,
            'cargo' => $this->faker->jobTitle,
            'interesses' => $this->faker->sentence,
            'fonte' => $this->faker->word,
            'status' => $this->faker->randomElement(['novo', 'em_acompanhamento', 'convertido']),
            'data_criacao' => now(),
            'ultima_atualizacao' => now(),
        ];
    }
}
