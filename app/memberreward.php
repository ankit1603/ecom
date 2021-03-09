<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class memberreward extends Model
{

	
    //Table Name
     protected $table = 'member_reward';

	  protected $fillable = ['member_id', 'status', 'reward_id', 'Alloted_Date', 'Dispatch_Date'];

}
