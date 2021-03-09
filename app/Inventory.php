<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inventory extends Model
{
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inventories';

    /**
     * Cascade Soft Deletes Relationships
     *
     * @var array
     */
    protected $cascadeDeletes = ['carts'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at', 'offer_start', 'offer_end', 'available_from'];

    /**
     * The attributes that should be casted to boolean types.
     *
     * @var array
     */
    
    protected $casts = [
        'free_shipping' => 'boolean',
        'stuff_pick' => 'boolean',
        'active' => 'boolean',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
                        'shop_id',
                        'title',
                        'warehouse_id',
                        'product_id',
                        'brand',
                        'supplier_id',
                        'sku',
                        'condition',
                        'condition_note',
                        'description',
                        'key_features',
                        'stock_quantity',
                        'damaged_quantity',
                        'user_id',
                        'purchase_price',
                        'sale_price',
                        'offer_price',
                        'offer_start',
                        'offer_end',
                        'shipping_weight',
                        'free_shipping',
                        'stuff_pick',
                        'available_from',
                        'min_order_quantity',
                        'linked_items',
                        'slug',
                        'meta_title',
                        'meta_description',
                        'active',
                        'feature_p_status'
                    ];

}
