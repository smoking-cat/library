<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::random()->id,
            'book_id' => Book::random()->id,
            'title' => $this->faker->text(),
            'description' => $this->faker->text(),
            'rating' => $this->faker->randomFloat(1, 0, 5)
        ];
    }
}
