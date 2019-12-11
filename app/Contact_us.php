<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact_us extends Model
{
    public $table ='contact_us';

    public $fillable = ['firstName', 'lastName', 'email', 'phone', 'message'];
}
