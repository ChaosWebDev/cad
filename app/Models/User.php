<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    // * HELPERS * //
    public function hasRole(string $value): bool
    {
        return $this->roles()->where('name', $value)->exists();
    }

    // * RELATIONSHIPS * //
    public function info()
    {
        return $this->hasOne(UserInformation::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
