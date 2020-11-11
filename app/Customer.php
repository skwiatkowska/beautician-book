<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model implements Authenticatable {
    use AuthenticableTrait;
    protected $table = 'customers';
    public $timestamps = false;
    protected $fillable = [
        'fname',
        'lname',
        'mobile',
        'email',
        'pesel'
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'created_at',
        'updated_at'
    ];
}
