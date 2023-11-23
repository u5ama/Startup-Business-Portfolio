<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $table = 'blogs';
    protected $fillable = [
      'title',
      'image',
      'slug',
      'description',
    ];
  public function category()
  {
    return $this->hasOne('App\Models\Categories', 'id','category_id');
  }
}
