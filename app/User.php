<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    const USUARIO_VERIFICADO = '1';
    const USUARIO_NO_VERIFICADO = '0';

    const USUARIO_ADMINISTRADOR = 'A';
    const USUARIO_ALUMNO = 'S';
    const USUARIO_EMPRESA = 'C';

    protected $table = 'users';
    protected $dates = ['deleted_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'role',
        'verified',
        'verification_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'verification_token'
    ];

    public function esVerificado() {
        return $this->verified == User::USUARIO_VERIFICADO;
    }

    public static function generarVerificationToken(){
        return str_random(40);
    }

    public function esAlumno(){
        return $this->role ==User::USUARIO_ALUMNO;
    }

    public function esEmpresa(){
        return $this->role ==User::USUARIO_EMPRESA;
    }

    public function esAdministrador(){
        return $this->role ==User::USUARIO_ADMINISTRADOR;
    }


    public function student(){
        return $this->hasOne('App\Student');
    }

    public function company(){
        return $this->hasOne('App\Company');
    }

}
