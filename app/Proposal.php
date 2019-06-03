<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $fillable = [
        'user_id', 'proposal'
    ];
    public function proposals()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
