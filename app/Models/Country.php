<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\User;
use App\Models\Post;

class Country extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'countries';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country_name',        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
    ];
    
     public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    
    public function posts()
    {
        return $this->hasManyThrough(Post::class, User::class);
        
        return $this->hasManyThrough(Post::class, User::class,
                    'country_id',//users.user_id
                    'user_id',//posts.user_id
                    'id',//country.id
                    'id',//users.id
                );
    }
    
      
}
