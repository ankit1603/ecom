<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{

	
    //Table Name
     protected $table = 'addtowishlist';

	  protected $fillable = ['userid', 'product_id'];

}
