<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventoryvariations extends Model
{

	
    //Table Name
     protected $table = 'inventory_variations';

	  protected $fillable = ['inventoryid', 'variationvalues'];

}
