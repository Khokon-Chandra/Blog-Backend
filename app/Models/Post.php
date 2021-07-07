<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    protected $with = ['category','author'];

    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when( $filters['search'] ?? false, fn($query,$search)=>
            $query->where('title','like','%'.$search.'%')
                    ->orWhere('description','like','%'.$search.'%')->paginate(5));
        
    }
}
