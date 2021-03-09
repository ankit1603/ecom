<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
                    'name',
                    'category_sub_group_id',
                    'slug',
                    'description',
                    'active',
                    'order',
                    'featured',
                    'meta_title',
                    'meta_description'
                ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

     /**
     * Get all listings for the category.
     */
    public function listings()
    {
        return $this->belongsToMany(Inventory::class, 'category_product', null, 'product_id', null, 'product_id')
        ->groupBy('inventories.product_id', 'inventories.shop_id');
    }

    /**
     * Get the subGroups for the category.
     */
    public function subGroup()
    {
        return $this->belongsTo(CategorySubGroup::class, 'category_sub_group_id')->withTrashed();
    }

    /**
     * Get the products for the category.
     */
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    /**
     * Setters
     */
    public function setFeaturedAttribute($value)
    {
        $this->attributes['featured'] = (bool) $value;
    }
}
