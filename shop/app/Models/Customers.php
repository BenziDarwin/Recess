<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customers extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "Customers";
    protected $primaryKey = "CustomerID";

    protected $fillable = [
        'name', 'address', 'password'
    ];
}
