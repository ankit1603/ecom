<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class selfiephoto extends Model
{

	
    //Table Name
     protected $table = 'member_selfie_photo';

	  protected $fillable = ['m_id','Status','Image'];

}
