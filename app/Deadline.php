<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deadline extends Model {
    protected $table = 'deadlines';


    protected $fillable = [
        'empl_id',
        'time_from',
        'time_to',
        'day'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public $timestamps = false;
}
