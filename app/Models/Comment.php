<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable  = [
        'user_id',
        'post_id',
        'parent_id',
        'message',
        'approved',
        'comment_type'
    ];

    public function childs()
    {
        return $this->hasMany(Comment::class,'parent_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function post()
    {
        return $this->belongsTo(Post::class,'post_id');
    }






}
