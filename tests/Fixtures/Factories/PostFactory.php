<?php

namespace RecentlyViewed\Tests\Fixtures\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use RecentlyViewed\Tests\Fixtures\Models\Post;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
        ];
    }
}
