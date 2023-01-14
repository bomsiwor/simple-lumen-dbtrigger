<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Obat;

class ObatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Obat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'seri' => "O" . $this->faker->unique()->randomNumber(3, true),
            'nama_obat' => $this->faker->unique()->word(),
            'stok' => $this->faker->numberBetween(0, 100)
        ];
    }
}
