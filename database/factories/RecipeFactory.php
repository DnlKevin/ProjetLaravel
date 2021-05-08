<?php

namespace Database\Factories;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'content' => $this->faker-> paragraph(),
            'ingredients' => $this->faker->paragraph(),
            'url' => $this->faker->url(),
            'tags' => $this->faker->sentence(),
            'date' => $this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            'status' => $this->faker->sentence,
            //
        ];
    }
}
