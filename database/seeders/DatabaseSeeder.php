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


        $user = User::create([
            'guard' => 'admin',
            'username' => 'super-admin',
            'name' => 'Super Admin',
            'email' => 'super.admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('00000000'), // password
            'remember_token' => Str::random(10),
        ]);


        $user->assignRole("super admin");


    }
}
