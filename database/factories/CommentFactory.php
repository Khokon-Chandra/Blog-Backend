<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $postIdArr = json_decode(Post::pluck('id'));
        return [
            'user_id'=>rand(1,10),
            'post_id'=>$postIdArr[array_rand($postIdArr)],
            'message'=>$this->faker->paragraph(rand(1,5)),
        ];
    }
}
