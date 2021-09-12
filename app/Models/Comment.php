<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory,SoftDeletes;

    protected $with = ['childs'];

    public function childs()
    {
        return $this->hasMany(Comment::class,'comment_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
