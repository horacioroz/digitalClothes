<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Image extends Model
{
   public function product(){
        return $this->belongsTo("App\Product","id");
    }

    public function scopeActive($q) 
    {
        return $q->where('active', 1);
    }
}
