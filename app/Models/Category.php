<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Shetabit\Visitor\Traits\Visitable;

class Category extends Model
{
    use HasFactory,SoftDeletes,Visitable;

    protected $fillable = [
        'slug',
        'name',
        'description',
        'parent_id',
    ];

    public function posts()
    {
       return $this->morphToMany(Post::class,'postable');
    }

    public function childs()
    {
        return $this->hasMany(Category::class,'parent_id');
    }

}
