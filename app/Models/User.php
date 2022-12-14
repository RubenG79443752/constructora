<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name','email','rol','usuario','estado','password'];

    /**
     * The attributes that should be hidden for serialization.
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


    static $rules = [
		'name' => ['required', 'string', 'max:255'],
		'email' => 'required',
		'rol' => 'required',
		'usuario' => ['required', 'string', 'max:15','unique:users'],
		'estado' => 'required',
        'password' => ['required', 'string','min:3', 'max:15'],
    ];
    static $ruless = [
		'name' => ['required', 'string', 'max:255'],
		'rol' => 'required',
		'estado' => 'required',
        'email' => 'required'
    ];

    protected $perPage = 20;

    public function role()
    {
        return $this->hasOne('App\Models\Rol', 'id', 'rol');
    }
}
