<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
  protected $fillable=['author', 'title', 'body'];

  public function images()
  {
    return $this->hasMany(Images::class);
  }
}
