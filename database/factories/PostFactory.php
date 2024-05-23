<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $postTitle = $this->faker->unique()->jobTitle();
        $postContent = $this->faker->realTextBetween(500,1000);

        return [
            'title' => $postTitle,
            'content' => $postContent,
            'image' => 'build/img/post-thumb.png',
            'writer' => $this->faker->numberBetween(0, 10),
            'url_key' => str_replace(' ', '_', $postTitle),
            'category_id'=> $this->faker->numberBetween(1,20),
        ];
    }
}
