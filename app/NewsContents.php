<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsContents extends Model
{
  protected $fillable = [
      'title',
      'url',
      'published_at',
      'news_id',
  ];
}
