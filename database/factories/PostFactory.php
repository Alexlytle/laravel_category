<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Post::class;
    public function definition()
    {
        return [
            'title'=>  $this->faker->title(),
            'body'=>   $this->faker->title(),
            'category_id'=> $this->faker->numberBetween(1,5),
            'parent_id'=> $this->faker->numberBetween(1,5),
        ];
    }
}
