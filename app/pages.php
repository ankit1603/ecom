<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pages extends Model
{

	
    //Table Name
     protected $table = 'pages';

	  protected $fillable = ['pagename', 'content', 'status'];

}
