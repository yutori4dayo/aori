<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefectures extends Model
{
   public function getregion(){
     return $this->hasOne(regions::class);
   }
}
