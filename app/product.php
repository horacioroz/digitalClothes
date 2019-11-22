<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;


class Product extends Model

{
    protected $fillable = ['name', 'description', 'category_id', 'prod_img', 'color', 'size', 'price', 'discount_porcet','active'];

    public function category(){
        return $this->belongsTo("App\Category","id");
    }
}
