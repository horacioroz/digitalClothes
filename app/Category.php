<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    protected $fillable = ['category_name', 'active'];

    public function product(){
        return $this->hasMany("App\Product", "category_id");
    }
}
