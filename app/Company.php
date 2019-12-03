<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    protected $fillable = [
        'name',
        'business_name',
        'representative',
        'ruc',
        'logo',
        'description'
    ];

    //Relación de uno a muchos
    public function offers() {
        return $this->hasMany('App\Offer');
    }

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
