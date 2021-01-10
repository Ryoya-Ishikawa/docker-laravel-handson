<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'address' => $this->faker->address,
            'description' => $this->faker->realText(255),
            'image_name' => $this->faker->word(),
            'image_url' => $this->faker->image(storage_path('images'), 640, 480),
            'user_id' => Post::factory()
        ];
    }
}
