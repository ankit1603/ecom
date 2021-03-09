<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productPackage extends Model
{

	 //Table Name
     protected $table = 'product_package';

	  protected $fillable = ['package_name', 'package_price', 'package_color','BV', 'CI', 'part_amount','status'];
    

}
