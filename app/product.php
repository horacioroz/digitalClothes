<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model

{
    protected $fillable = ['name', 'description', 'category', 'prod_img', 'color', 'size', 'price', 'discount_porcet','active'];

    public function category(){
        return $this->belongsTo("App/category","category_id");
    }
}
