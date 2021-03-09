<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coupan extends Model
{

	 //Table Name
     protected $table = 'coupan';
     public $timestamps = false;

	  protected $fillable = ['couponname','type','offer', 'status', 'cat_id', 'coupancode', 'startdate', 'valid', 'enddate','id','name'];
    

}
