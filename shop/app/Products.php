<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "Products";
    protected $primaryKey = "productID";
    protected $columns = ["ProductName", "description", "status", "price", "quantity", "participantID"];
}
