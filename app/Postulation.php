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

}
