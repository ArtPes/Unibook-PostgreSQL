<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostU extends Model
{
  protected $table = 'posts';
  public $timestamps = false;
  public $incrementing = false;
}
