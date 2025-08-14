<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Usuario extends Authenticatable implements JWTSubject
{
    use HasFactory;
    //eloquent asume que nombre de tablas es el plural del modelo. Así que le indicamos explícitamente que el nombre de la tablaa es "usuario"
    protected $table = 'usuario';

    protected $fillable = [
        'nombre',
        'correo',
        'clave',
    ];

    protected $hidden = [
        'clave',
    ];

    public $timestamps = true;

    public function proyectos(): HasMany
    {
        return $this->hasMany(Proyecto::class, 'created_by');
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    //para usar clave en vez de password (predeterminado de eloquent)
    public function getAuthPassword()
    {
        return $this->clave;
    }

    //para usar correo en vez de email (predeterminado de eloquent)
    public function getEmailForPasswordReset()
    {
        return $this->correo;
    }
}
