<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LeadsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            
            'nombre' => $this->faker->sentence(2),
            'edad' => $this->faker->randomElement([2,4,6,8,15,30]),
            'estadocivil' => $this->faker->text(),
            'telefono1' => $this->faker->text(),
            'telefono2' => $this->faker->text(),
            'correo' => $this->faker->text(),
            'pais' => $this->faker->text(),
            'activar_id' => $this->faker->text(),
            
        ];
    }
}
