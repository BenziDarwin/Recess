<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customers extends Authenticatable
{
    use Notifiable;
    protected $table = "Customers";
    protected $primaryKey = "CustomerID";

    protected $fillable = [
        'name', 'email', 'address'
    ];

    protected $hidden = [
        'password'
    ];
}
