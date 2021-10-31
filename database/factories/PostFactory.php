<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
            'slug'=>$this->faker->unique()->slug,
            'user_id'=>rand(1,User::count()),
            'title'=>$this->faker->sentence(),
            'feature_image'=>$this->faker->imageUrl,
            'excerpt'=>$this->faker->paragraph(),
            'description'=>$this->faker->paragraph(3),
        ];
    }
}
