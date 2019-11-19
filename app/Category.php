<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['category_name', 'active'];

    public function product(){
        return $this->hasMany("App/product", "category_id");
    }
}
