<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
      /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'shops';

     /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

     /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'active' => 'boolean',
        'payment_verified' => 'boolean',
        'id_verified' => 'boolean',
        'phone_verified' => 'boolean',
        'address_verified' => 'boolean',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
                 
                    'name',
                    'legal_name',
                    'email',
                    'slug',
                    'description',
                    'external_url',
                    'timezone_id',
                    'current_billing_plan',
                    'stripe_id',
                    'card_holder_name',
                    'card_brand',
                    'card_last_four',
                   
                    'active',
                    'payment_verified',
                    'id_verified',
                    'phone_verified',
                    'address_verified',
                    'image',
                ];

    /**
     * Get the user that owns the shop.
     */

}
