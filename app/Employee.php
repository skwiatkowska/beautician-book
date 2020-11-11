<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    public $timestamps = false;

    protected $fillable = [
        'fname', 
        'lname',
        'mobile',
        'email'
    ];

    protected $hidden = [
        'created_at', 
        'updated_at'
    ];
}
