<?php

namespace Database\Factories;

use App\Models\recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

class recipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'id' => $this->faker->id,
            'author_id' => $this->faker->author_id,
            'title' => $this->faker->title,
            'content' => $this->faker->content,
            'ingredients' => $this->faker->ingredients,
            'url' => $this->faker->url,
            'tags' => $this->faker->tags,
            'date' => $this->faker->date,
            'status' => $this->faker->status,
        ];
    }
}
