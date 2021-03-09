<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'suppliers';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
                    'shop_id',
                    'name',
                    'email',
                    'contact_person',
                    'url',
                    'phone',
                     'address_line_1',
                      'address_line_2',
                       'city',
                        'state',
                         'zip_code',
                         'country_name',
                         'country_id',
                         'description',
                    'active',
                ];
}
