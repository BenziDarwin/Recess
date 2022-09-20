<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $table = "Receipts";
    protected $primaryKey = "id";
    protected $fillable = ["customerName", "participantID", "quantity"];
}
