<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class People extends Model {

  use SoftDeletes;
  protected $fillable = ['first_name', 'last_name', 'birthdate'];
  protected $dates = ['deleted_at'];

}

?>
