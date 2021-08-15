<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;


class Admin extends Authenticatable
{
	use HasFactory, Notifiable;
    use Notifiable;
	protected $gard = 'admin';
	protected $fillable = ['name','email','password','created_at','updated_at'];
	protected $hidden =['remember_token'];
}
