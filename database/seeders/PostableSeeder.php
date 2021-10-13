<?php

namespace Database\Seeders;

use App\Models\Post;
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
        $postId = Post::pluck('id');
       foreach($postId as $id){
            DB::insert('insert into postables (post_id, postable_id, postable_type) values (?, ?, ?)', [$id, rand(1,10), $models[0]]);
            DB::insert('insert into postables (post_id, postable_id, postable_type) values (?, ?, ?)', [$id, rand(1,10), $models[1]]);
        }
    }
}
