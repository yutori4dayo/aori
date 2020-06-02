<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
  protected $fillable = [
      'name',
      'url',
      'size',
      'sectionFlg',
  ];
}
