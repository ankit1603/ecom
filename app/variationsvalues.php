<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variationsvalues extends Model
{

	
    //Table Name
     protected $table = 'variationvalues';

	  protected $fillable = ['variationsid', 'values', 'unitid', 'status'];

}
