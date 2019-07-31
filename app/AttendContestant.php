<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttendContestant extends Model
{
    protected $fillable = [
        'expo_member_id', 'contestant_id'
    ];
}
