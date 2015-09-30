<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacation_Request extends Model
{
    protected $table = 'vacation_requests';

    protected $fillable = ['user_id', 'type', 'start_at', 'end_at', 'password'];
}
