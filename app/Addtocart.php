<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addtocart extends Model
{

	
    //Table Name
     protected $table = 'add_to_cart';

	  protected $fillable = ['userid', 'productid', 'name', 'quantity', 'image', 'status', 'price'];

}
	