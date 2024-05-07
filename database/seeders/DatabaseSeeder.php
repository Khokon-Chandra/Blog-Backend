<?php

namespace Database\Seeders;

use App\Models\Menu;
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
        User::factory(10)->create();

        Menu::create(['name' => 'Main menu']);

        $this->call([
            ProfileSeeder::class,
            PostSeeder::class,
            CategorySeeder::class,
            MediaSeeder::class,
            CommentSeeder::class,
            TagSeeder::class,
            PostableSeeder::class,
            RolePermissionSeeder::class,
        ]);
    }
}
