<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = ['name_spanish', 'name_english', 'description_spanish', 'description_english'];

  public function products() {
    return $this->hasMany('App\Product', 'category_id', 'id');
  }
}
