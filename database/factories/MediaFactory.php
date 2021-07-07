<?php

namespace Database\Factories;

use App\Models\Media;
use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Media::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
   
    public function definition()
    {
        return [
            'link'=>$this->faker->imageUrl(200,200),
            'alt_text'=>$this->faker->sentence(),
            'meta_data'=>$this->faker->paragraph(),
            'description'=>$this->faker->paragraph(2),
        ];
    }
}
