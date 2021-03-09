<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{

	 //Table Name
     protected $table = 'member';

	  protected $fillable = ['m_id ', 'sponsor_id', 'placement_id','placement ', 'activation_date', 'sponsor_name','m_name ', 'm_mobile', 'm_email','m_pan ', 'm_gender', 'm_state_id','m_city_id ', 'm_pincode', 'm_address','m_status ', 'm_photo', 'm_date','block_date ', 'package', 'max_capping'];
    

}
