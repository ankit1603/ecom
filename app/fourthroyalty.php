<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fourthroyalty extends Model
{

	
    //Table Name
     protected $table = 'fourth_royalty';

	  protected $fillable = ['member_id', 'status', 'Approval_Date', 'Start_Date', 'End_Date', 'Count', 'Max_Count', 'Date_Paid'];

}
