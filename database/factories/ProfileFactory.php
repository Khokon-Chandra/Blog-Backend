<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>User::factory(),
            'first_name'=>$this->faker->name,
            'last_name'=>$this->faker->name,
            'mobile'=>$this->faker->phoneNumber(),
            'gender'=>$this->faker->randomElement(['male','female']),
            'skills'=>json_encode(['html','css','javascript','php','laravel']),
            'url_website'=>$this->faker->url(),
            'url_facebook'=>$this->faker->url(),
            'url_twitter'=>$this->faker->url(),
            'url_instagram'=>$this->faker->url(),
            'url_linkedin'=>$this->faker->url(),
            'date_of_birth'=>$this->faker->date,
            'address'=>$this->faker->address,
            'bio'=>$this->faker->paragraph,
            'user_metadata'=>$this->faker->paragraph,
            'last_ip'=>$this->faker->ipv4,
            'login_count'=>rand(1,50),
            'last_login'=>$this->faker->date,
            'status'=>rand(0,1),
            'created_by'=>rand(0,10),
            'updated_by'=>rand(0,10),
            'deleted_by'=>rand(0,10),
        ];
    }
}

