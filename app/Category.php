<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name'
    ];

    //Relación de uno a muchos
    public function offers() {
        return $this->hasMany('App\Offer');
    }
}
