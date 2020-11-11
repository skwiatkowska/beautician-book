<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model implements Authenticatable {
    use AuthenticableTrait;

    protected $table = 'admins';

    protected $fillable = [
        'email', 
        'password'
    ];

    protected $hidden = [
        'password', 
        'remember_token',
        'created_at', 
        'updated_at'
    ];

    public $timestamps = false;
}
