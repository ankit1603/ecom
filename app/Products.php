<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';


     protected $cascadeDeletes = ['inventories'];

    /**
     * The attributes that should be casted to boolean types.
     *
     * @var array
     */
    protected $casts = [
        'has_variant' => 'boolean',
        'requires_shipping' => 'boolean',
        'downloadable' => 'boolean',
    ];

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
    protected $fillable = ['id','shop_id','manufacturer_id','brand','name','model_number','mpn','gtin','gtin_type','description','min_price','max_price','origin_country','has_variant','requires_shipping','downloadable', 'slug','mpn','upc','sale_count','image','active','sku',
    'categoryid','feature_p_status'];

}

