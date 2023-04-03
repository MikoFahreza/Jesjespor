<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Admin as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'admin';
    protected $primaryKey = 'id_admin';

    protected $fillable = [
        'nama',
        'jk',
        'ttl',
        'username',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
