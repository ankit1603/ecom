<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reward extends Model
{

	
    //Table Name
     protected $table = 'reward';

	  protected $fillable = ['Reward_Name', 'Reward_Amount', 'Matching_points'];

}
