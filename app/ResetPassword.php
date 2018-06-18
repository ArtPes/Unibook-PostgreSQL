<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResetPassword extends Model
{
      protected $table = 'reset_password';
      public $timestamps = true;
      public $incrementing = false;
}
