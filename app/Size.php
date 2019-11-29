<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Size extends Model
{
   protected $fillable = ['size_name', 'active'];

   public function products(){
        return $this->belongsToMany("App\Product", "product_size", "size_id", "product_id");
    }//
}
