<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variationscategories extends Model
{

	
    //Table Name
     protected $table = 'variationscategory';

	  protected $fillable = ['variationsid', 'categoryid'];

}
