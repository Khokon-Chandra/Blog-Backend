<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
                'username'=>'khokon1234',
                'name' => 'Khokon Chandra',
                'role'=>1,
                'email' => 'cram3632@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('00000000'), // password
                'remember_token' => Str::random(10),
        ]);

        User::factory(10)->create();
        $this->call([
            PostSeeder::class,
            CategorySeeder::class,
            // MediaSeeder::class,
            CommentSeeder::class,
            TagSeeder::class,
            PostableSeeder::class,
        ]);

    }
}
