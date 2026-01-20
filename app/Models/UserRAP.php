<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // opcional si quieres login
use Illuminate\Notifications\Notifiable;

class UserRAP extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'username',
        'role',
        'active',
        'email',
        'password',
    ];

    // Relación con posts
    public function posts()
    {
        return $this->hasMany(PostRAP::class, 'user_rap_id');
    }
}
