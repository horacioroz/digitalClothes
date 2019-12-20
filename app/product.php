<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Size;
use App\Image;

class Product extends Model

{
    protected $fillable = ['name', 'description', 'category_id', 'price', 'discount_porcent','active'];

    protected $append = [
        'price_with_discount',
        'image_art_list',
    ];

    public function category(){
        return $this->belongsTo("App\Category","id");
    }
    public function colors(){
        // return $this->belongsToMany(Color::class)
        //     ->withPivot('color_product', 'product_id');
        return $this->belongsToMany("App\Color", "color_product","product_id","color_id");
    }
    public function sizes(){
        return $this->belongsToMany("App\Size", "product_size","product_id","size_id");
    }
    public function images(){
        return $this->hasMany("App\Image", "product_id");
    }

    public function getPriceWithDiscountAttribute()
    {
        return number_format(
            $this->attributes['price'] * (1 - $this->attributes['discount_porcent'] / 100),
            2, ",", "."
        );
    }


}
