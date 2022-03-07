<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Publisher;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->realText(),
            'pic' => $this->faker->imageUrl(),
            'author_id' => Author::random()->id,
            'genre_id' => Genre::random()->id,
            'publisher_id' => Publisher::random()->id,
            'category_id' => Category::random()->id,
            'amount' => $this->faker->randomDigitNotNull()
        ];
    }
}
