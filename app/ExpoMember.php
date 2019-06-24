<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpoMember extends Model
{
    public function gamification()
    {
        return $this->hasOne('App\Gamification');
    }
}
