<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $models = ['App\Models\Category','App\Models\Tag'];
        for($i=1; $i<=100; $i++){
            DB::insert('insert into postables (post_id, postable_id, postable_type) values (?, ?, ?)', [rand(1,10), rand(1,10), $models[rand(0,1)]]);
        }
    }
}
