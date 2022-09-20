<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = "Products";
    protected $primaryKey = "productID";
    protected $columns = ["ProductName", "description", "participantID"];
}
