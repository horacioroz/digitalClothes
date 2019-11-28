<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class color extends Model
{
    protected $fillable = ['color_name', 'active'];

    public function products(){
         // return $this->belongsToMany(Product::class)
            // ->withPivot('color_product', 'color_id');
        return $this->belongsToMany("App\Product", "color_product","color_id","product_id");
    }
}
