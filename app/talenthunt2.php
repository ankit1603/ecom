<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class talenthunt2 extends Model
{

	
    //Table Name
     protected $table = 'talent_hunt_2';

	  protected $fillable = ['m_id', 'Image', 'Status', 'Transaction_Id', 'E_Wallet', 'online_payment'];

}
