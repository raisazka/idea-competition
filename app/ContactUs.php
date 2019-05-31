<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $fillables = ['id','name','email','subject','message','viewed'];
}
