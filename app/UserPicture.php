<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPicture extends Model
{
  // la foto dell'user appartiene all'user
  public function user() {
    return $this->belongsTo('App\User');
  }
}
