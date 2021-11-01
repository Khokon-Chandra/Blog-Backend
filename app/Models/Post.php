<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];

    /**
     * auther method : User::class
     *
     * @return void
     */
    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    /**
     * categories method for retrive all categories
     */

    public function categories()
    {
        return $this->morphedByMany(Category::class,'postable');
    }

    /**
     * Retrivint all tags
     */

    public function tags()
    {
        return $this->morphedByMany(Tag::class,'postable');
    }
/**
 * retriving all comments by this method
 *
 * @return void
 */
    public function comments()
    {
        return $this->hasMany(Comment::class,'post_id');
    }


    /**
     * Filter scope method
     */
    public function scopeFilter($query, array $filters)
    {
        $query->when( $filters['search'] ?? false, fn($query,$search)=>
            $query->where('title','like','%'.$search.'%')
                    ->orWhere('description','like','%'.$search.'%')->get());

    }

    public static function updateCommentCount($postId)
    {
        self::where('id',$postId)->update([
            'comment_count'=> count(self::where('id',$postId)->select('comment_count')->get())+1,
        ]);
        return $postId;
    }







}
