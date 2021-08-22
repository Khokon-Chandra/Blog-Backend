<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create(['username'=>'khokon1234','name'=>'Khokon Chandra','role'=>1,'email'=>'cram3632@gmail.com','password'=>Hash::make('00000000')]);
        User::factory()->create();
        $this->call([
            CategorySeeder::class,
            PostSeeder::class,
            MediaSeeder::class,
        ]);

    }
}
