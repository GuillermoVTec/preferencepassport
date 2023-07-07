<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class distribuidoresFactory extends Factory
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
            
              'razonsocial' => $this->faker->sentence(2),  
              'representantelegal'  => $this->faker->text(),
              'rfc'         => $this->faker->text(),
              'direccion'   => $this->faker->text(),
              'ciudad'      => $this->faker->text(),
              'pais'        => $this->faker->text(),
              'cp'          => $this->faker->text(),
              'correo'      => $this->faker->text(),
              'telefono'    => $this->faker->randomElement([2,4,6,8,15,30]),
              'date'        => $this->faker->date('Y-m-d'),
              'matriculaid' => $this->faker->text(),
              'matriculaid2'=> $this->faker->text(5),
            
        ];
    }
}
