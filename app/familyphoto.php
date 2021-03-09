<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class familyphoto extends Model
{

	
    //Table Name
     protected $table = 'member_family_photograph';

	  protected $fillable = ['m_id', 'Image'];

}
