<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{

	
    //Table Name
     protected $table = 'customers_address';

	  protected $fillable = ['customer_id', 'address_line_1', 'address_line_2', 'landmark', 'area', 'address_type', 'city','state','zip_code','name','country_id','email','phone'];

}
	