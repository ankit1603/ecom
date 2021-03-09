<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productimage extends Model
{

	
    //Table Name
     protected $table = 'product_image';

	  protected $fillable = ['productid', 'image'];

}
