<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	
    //Table Name
     protected $table = 'category_groups';

	  protected $fillable = ['name', 'description', 'slug', 'icon', 'order', 'active', 'meta_title', 'meta_description'];

}
