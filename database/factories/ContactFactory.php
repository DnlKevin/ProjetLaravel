<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->name(),
            'email' =>$this->faker->safeEmail,
            'message' =>$this->faker->paragraph(),
            'date'=>$this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
        ];
    }
}
