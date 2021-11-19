<?php

namespace App\Models;

use App\Events\UserDeleted;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable,SoftDeletes,HasRoles;

    protected $guard = [];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    protected $dispatchesEvents = [
        "deleted"=>UserDeleted::class,
    ];


    public function profile()
    {
        return $this->hasOne(Profile::class,'user_id');
    }


    public function posts()
    {
        return $this->hasMany(Post::class);
    }



    public function scopeFilter($query, array $filters)
    {
        $query->when( $filters['search'] ?? false, fn($query,$search)=>
            $query->where('name','like','%'.$search.'%')
                    ->orWhere('username','like','%'.$search.'%')
                    ->orWhere('email','like','%'.$search.'%'))
                    ->select([
                        'users.*',
                        'posted' => Post::selectRaw('COUNT(*)')
                                ->whereColumn('user_id', 'users.id')
                    ]);

    }



}
