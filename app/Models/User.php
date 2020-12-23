<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Phone;
use App\Models\Permission;
use App\Models\PhoneNum;
use App\Models\Post;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';
//    protected $appends = ['phone', 'posts'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
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
    
    
    
    
    public function phone() {
        return $this->hasOne(Phone::class, 'user_id', 'id');
    }

    public function posts() {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }

    public function getPhoneAttribute() {
        return $this->phone();
    }

    public function getPostsAttribute() {
        return $this->posts()->limit(5)->get();
    }
    
    public function phoneNum()
    {
        return $this->hasOneThrough(PhoneNum::class, Phone::class);
        
        return $this->hasOneThrough(PhoneNum::class, Phone::class,
                    'user_id',
                    'phone_id',
                    'id', //user.id
                    'id' //phones.id = phone_nums.phone_id
                );
    }
    
    public function permissions() {
        
        return $this->belongsToMany(Permission::class, UserHasPermission::class)->withTimestamps();

        return $this->belongsToMany(Permission::class, 'user_has_permissions',
                    'user_id',
                    'permission_id',
                    'id', //users.id
                    'id', //permissions.id
                 );
         
    }
    
}
