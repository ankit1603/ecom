<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{

	
    //Table Name
     protected $table = 'product_order';

	  protected $fillable = ['orderid', 'product_id', 'Total', 'Discount', 'TotalAmount', 'Payment_Type', 'order_status', 'DeliveryDate','status'];

}
