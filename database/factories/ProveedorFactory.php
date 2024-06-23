<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proveedor>
 */
class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Elegir aleatoriamente entre 'Persona Física' y 'Persona Moral'
        $tipo = $this->faker->randomElement(['Persona Física', 'Persona Moral']);
        return [
            'razon_social' => $this->faker->company,
            'tipo'=> $tipo,
            'rfc' => strtoupper($this->faker->unique()->regexify('[A-Za-z0-9]{13}')), // 13 caracteres alfanuméricos
            'domicilio' => $this->faker->text(50), // Limitado a 50 caracteres
            'email' => $this->faker->unique()->safeEmail, // Normalmente está bien, ya que los emails no suelen exceder 25 caracteres
            'telefono' => $this->faker->regexify('[0-9]{12}'), // 12 dígitos numéricos
        ];
    }
}
