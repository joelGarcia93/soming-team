<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = ['name_spanish', 'name_english',
        'description_spanish', 'description_english', 'price','category_id'];

  public function category() {
    return $this->belongsTo('App\Category', 'category_id', 'id');
  }

  public function images() {
    return $this->hasMany('App\Image', 'product_id', 'id');
  }
}
