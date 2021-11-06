<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::upsert([
            ['slug'=>'business','name'=>'business'],
            ['slug'=>'world','name'=>'world'],
            ['slug'=>'fashion','name'=>'fashion'],
            ['slug'=>'politics','name'=>'politics'],
            ['slug'=>'sports','name'=>'sports'],
            ['slug'=>'health','name'=>'health'],
            ['slug'=>'science','name'=>'science'],
            ['slug'=>'video','name'=>'video'],
        ],['slug','name']);
    }

}
