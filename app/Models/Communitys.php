<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Communitys extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;


    protected $fillable = [
        'name',
        'last_name',
        'age',
        'rfc',
        'email',
        'password',
        'coordinadores_id' => 'required',


    ];

    static $rules = [
		'coordinadores_id' => 'required',
		'name' => 'required',
    ];


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
    public $timestamps = false;




    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cordinadores()
    {
        return $this->hasOne('App\Models\coordinadores', 'id', 'coordinadores_id');
    }




      /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clients()
    {
        return $this->hasMany('App\Models\Client', 'communitys_id', 'id');
    }

}
