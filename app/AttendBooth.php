<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttendBooth extends Model
{
    protected $fillable = [
        'expo_member_id', 'corporate_id'
    ];

    public function corporates()
    {
        return $this->belongsTo('App\Corporate', 'corporate_id');
    }
}
