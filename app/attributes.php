<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attributes extends Model
{

	
    //Table Name
     protected $table = 'variations_attributes';

	  protected $fillable = ['name', 'status'];

}
