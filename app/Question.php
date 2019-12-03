<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';

    protected $fillable = [
        'question'
    ];

    public function postulations() {
        return $this->hasOne('App\Postulation');
    }

    public function offer() {
        return $this->belongsTo('App\Offer', 'offer_id');
    }
}
