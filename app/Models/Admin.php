<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
  use HasFactory, Notifiable;

  protected $fillable = [
    'last_name',
    'first_name',
    'email',
    'phone_number',
    'address',
    'profile_picture',
    'email_verified_at',
    'password',
    'is_actived',
    'remerber_token',
    'created_at',
    'updated_at'
  ];
}
