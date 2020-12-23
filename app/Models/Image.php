<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Phone;
use App\Models\User;

class Image extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'images';
    
    
     public function imageable()
    {
        return $this->morphTo();
    }

}
