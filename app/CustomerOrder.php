<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerOrder extends Model
{

	
    //Table Name
     protected $table = 'customer_order';

	  protected $fillable = ['customerid', 'user_id', 'customeraddress', 'Total', 'Discount', 'TotalAmount', 'Payment_Type', 'order_status', 'DeliveryDate'];

}
