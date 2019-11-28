<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class image extends Model
{
   public function product(){
        return $this->belongsTo("App\Product","id");
    }
}
