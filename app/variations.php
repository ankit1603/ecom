<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variations extends Model
{

	
    //Table Name
     protected $table = 'variations';

	  protected $fillable = ['name', 'status', 'types'];

}
