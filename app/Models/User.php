<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\UserDetail;
use App\Models\Belijus;

class User extends Authenticatable
{
    protected $table = 'user';
    
    function detail(){
    	return $this->hasOne(UserDetail::class, 'id_user');
    }

    function belijus2(){
    	return $this->hasMany(Belijus::class, 'id_user');
    }
}
