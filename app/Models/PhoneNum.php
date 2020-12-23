<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Phone;
use App\Models\User;

class PhoneNum extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'phone_nums';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'phone_id',
        'phone_num'
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
    ];
    
    public function user()
    {
        
        return $this->belongsTo(User::class, 'user_id', 'id');
        
        //Array
        return $this->belongsTo(User::class, 'user_id', 'id')
                ->withDefault([
                    'name' => 'Foobar',
                ]);
                
        //Closure
        $email = 'foo@bar.com';
        return $this->belongsTo(User::class)->withDefault(function ($user, $post) use ($email) {
                    $user->name = 'Foobar';
                    $user->email = $email;
        });
    }

//    protected $appends = ['user'];
//    public function getUserAttribute() {
//        return $this->user()->first();
//    }
    

}
