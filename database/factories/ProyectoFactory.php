<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proyecto>
 */
class ProyectoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->sentence(3),
            'fechaini' => $this->faker->date(),
            'estado' => $this->faker->randomElement(['Activo', 'Pendiente', 'Finalizado']),
            'responsable' => $this->faker->name(),
            'monto' => $this->faker->numberBetween(100000, 2000000),
            'created_by' => \App\Models\Usuario::factory(), // Relación con el modelo Usuario
        ];
    }
}