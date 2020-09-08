<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "tb_product";
    protected $fillable = ['category_id', 'name_product', 'image', 'description', 'price'];
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
