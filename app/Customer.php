<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

	 //Table Name
     protected $table = 'customers';

	  protected $fillable = ['name', 'email', 'phone','address_line_1','status'];
    

}
