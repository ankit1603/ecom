<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    
/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'manufacturers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     public $timestamps = false;
     protected $fillable = ['shop_id', 'name',  'email', 'url', 'phone', 'description', 'country_id', 'active','brandlogo'];


      /**
     * Get the country for the manufacturer.
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    

    
    /**
     * Get all of the manufacturer for the country.
     */
    public function manufacturer()
    {
        return $this->hasMany(Manufacturer::class);
    }

    /**
     * Get the products for the country.
     */
    public function products()
    {

        return $this->hasMany(Product::class, 'origin_country');
    }

}
