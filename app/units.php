<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Units extends Model
{

	
    //Table Name
     protected $table = 'attributesunits';

	  protected $fillable = ['name', 'attributesid', 'status'];

}
