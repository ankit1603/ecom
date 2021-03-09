<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
     protected $table = 'brand';

	  protected $fillable = ['name','active', 'image','meta_title', 'meta_description'];

}
