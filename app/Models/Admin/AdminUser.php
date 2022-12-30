<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'admin_users';

    protected $guarded = 'admin';

    protected $fillable = [
        'username',
        'password',
        'name',
        'email',
    ];

    protected $hidden = [
        'password', 
        'remember_token',
    ];
}
