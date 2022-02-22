<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kutya>
 */
class KutyaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $kutyafajtak = ['Németjuhász', 'Boxer', 'Bulldog', 'Labrador', 'Puli', 'Uszkár', 'Csivava'];
        return [
            'nev' => $this->faker->firstName(),
            'eletkor' => $this->faker->numberBetween(1, 12),
            'fajta' => $this->faker->randomElement($kutyafajtak),
            'gazda_neve' => $this->faker->name()
        ];
    }
}
