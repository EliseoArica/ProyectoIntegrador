<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulation extends Model
{
    protected $table = 'postulations';

    protected $fillable = [
        'your_experience',
        'why_interested',
        'why_you',
        'curriculum',
        'student_id',
        'offer_id',
    ];

    public function offer() {
        return $this->belongsTo('App\Offer', 'offer_id');
    }

    public function student() {
        return $this->belongsTo('App\Student', 'student_id');
    }


}
