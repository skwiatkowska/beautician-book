<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model {
    protected $table = 'visits';
    public $timestamps = false;
    protected $fillable = [
        'empl_id', 
        'cust_id',
        'treat_id',
        'day',
        'time'
    ];

    protected $hidden = [
        'created_at', 
        'updated_at'
    ];
 
}
