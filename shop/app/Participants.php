<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participants extends Model
{
    protected $table = "Participants";
    protected $primaryKey = "participantID";
    protected $columns = ["Name", "DOB", "password", "performance"];
}
