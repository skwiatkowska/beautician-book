<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $table = 'treatments';
    public $timestamps = false;

    protected $fillable = [
        'name', 
        'price'
    ];

    protected $hidden = [
        'created_at', 
        'updated_at'
    ];
}
