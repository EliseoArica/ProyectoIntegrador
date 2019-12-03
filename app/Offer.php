<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offer extends Model
{
    
    use SoftDeletes;

    const OFERTA_ACTIVA = 'A';
    const OFERTA_CADUCADA = 'C';

    protected $table = 'offers';

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title',
        'status',
        'expiration_date',
        'description',
        'salary',
        'address',
        'company_id',
        'category_id',
    ];

    public function estaExpirada() {
        return $this->status == Offer::OFERTA_CADUCADA;
    }

    public function questions() {
        return $this->hasMany('App\Question');
    }

    public function students() {
        return $this->belongsToMany('App\Student');
    }

    public function category() {
        return $this->belongsTo('App\Category', 'category_id');
    }

    public function company() {
        return $this->belongsTo('App\Company', 'company_id');
    }    

}
