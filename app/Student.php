<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'name',
        'surname',
        'description',
        'image'
    ];

    public function offers() {
        return $this->belongsToMany('App\Offer', 'postulations', 'student_id', 'offer_id');
    }

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }


}
