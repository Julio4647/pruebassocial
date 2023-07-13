<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    static $rules = [
		'communitys_id' => 'required',
		'nombre' => 'required',
		'apellido' => 'required',
        'correo' => 'required',
		'telefono' => 'required',
		'fecha_inicio' => 'required',
		'fecha_vencimiento' => 'required',
		'fecha_pago' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['communitys_id','nombre','apellido','telefono','correo','fecha_inicio','fecha_vencimiento','fecha_pago'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function community()
    {
        return $this->hasOne('App\Models\Communitys', 'id', 'communitys_id');
    }



}
