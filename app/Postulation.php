<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulation extends Model
{
    protected $table = 'postulations';

    protected $fillable = [
        'answer',
        'question_id',
        'student_id',
        'offer_id',
    ];

    public function question() {
        return $this->belongsTo('App\Question', 'question_id');
    }
}
