<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class talenthunt1 extends Model
{

	
    //Table Name
     protected $table = 'talent_hunt_1';

	  protected $fillable = ['m_id', 'Image', 'Status', 'Transaction_Id', 'E_Wallet', 'online_payment'];

}
