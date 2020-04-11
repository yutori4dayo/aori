<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = [
      'Region',
      'Classification',
      'Distinction',
      'Mainnumber',
      'Color',
      'Bland',
      'bodytype',
      'Prefecture_city',
      'car_img'
  ];


}
