<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EducationHistory extends Model
{
    protected $table = 'education_histories';

    protected $fillable = [
        'school_name',
        'degree',
        'start_year',
        'end_year',
    ];
}
