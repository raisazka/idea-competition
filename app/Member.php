<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'group_id', 'member_name', 'email', 'phone', 'line', 'dob', 'ktp', 'role'
    ];
}
