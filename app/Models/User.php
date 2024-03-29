<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     * (les attributs assignables en masse(le traitement des champs en lot))
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name'=> 'diallo',
        'email'=>'foo.foo@example.com',
        'password'=>123,
    ];

    /**
     * The attributes that should be hidden for serialization.
     * (les attributs qui doivent être masqués pour la sérialisation)
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
