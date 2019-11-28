<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class size extends Model
{
   protected $fillable = ['size_name', 'active'];

   public function products(){
        return $this->belongsToMany("App\Product", "product_size","size_id","product_id");
    }//
}
