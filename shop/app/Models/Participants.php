<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participants extends Model
{
    use HasFactory;

    protected $table = "Participants";
    protected $primaryKey = "participantID";
    protected $columns = ["Name", "DOB", "password", "performance"];
}
