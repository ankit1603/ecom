<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Products;
use App\Variationscategories;
use App\Units;
use App\Variations;
use App\Variationsvalues;
use App\Attributes;
use App\Inventory;
use App\Inventoryvariations;

class InventoryController extends Controller
{
    

     public function addAttribute(Request $request, $id=null){


       if($request->isMethod('post')){
            $data = $request->all();

            $products = new Inventory;
             $sku= $data['sku'];
              $skusize=sizeof($sku);
             for ($i=0; $i <$skusize-1 ; $i++) { 
               $products = new Inventory;
                $products->title = $data['title'];
            $products->warehouse_id = $data['warehouse'];
             $products->product_id  = $data['productid'];
            //$products->supplier_id  = $data['supplier'];
            $available=$data['availablefrom'];
            $available1=date('Y-m-d H:m:s',strtotime($available));
            //$products->available_from = $available1;
            $products->active = $data['status'];
            $products->min_order_quantity = $data['minorder'];
            $products->shipping_weight = $data['weight'];
            $products->free_shipping = $data['freeshipping'];
            $products->shipping_weight = $data['packaging'];
             $variationscount = $data['variationscount'];
           
            $products->sku = $data['sku'][$i];
            $products->condition = $data['condision'][$i];
            $products->stock_quantity = $data['stock'][$i];
            $products->purchase_price = $data['purchaseprice'][$i];
             $products->sale_price = $data['price'][$i];
              $products->offer_price = $data['offerprice'][$i];
             

               $products->condition_note = $data['conditionnote'];
            $products->key_features = $data['keyfeature'];
            $products->description = $data['description'];
             $products->linked_items = $data['linkeditem'];
              $products->slug  = $i;
                 $products->meta_title = $data['metatitle'];
                  $products->meta_description = $data['metadescription'];

           
            

             $products->save();
              $lastid=$products->id;

               for ($j=0; $j <$variationscount ; $j++) { 

                 $categoryvariations = new Inventoryvariations;
                  $categoryvariations->inventoryid = $lastid;
                  $variationsv=$data['variations'][$j][$i];
                  $valuesdetails=Variationsvalues::orderBy('id', 'asc')->get();
                  $categoryvariations->variationsid = $lastid;
           
                  $categoryvariations->variationvalues = $data['variations'][$j][$i];
                  $categoryvariations->save();
             
            }
             }
           
            return redirect('/admin/add-attribute/'.$products->product_id)->with('flash_message_success','Inventory Added Successfully');
           
}
      

        $productsDetails = Products::where(['id'=>$id])->first();
         $pcateg=$productsDetails->categoryid;
         $variationscategories=Variationscategories::where(['categoryid'=>$pcateg])->get();
          $unitdetails=Units::orderBy('id', 'asc')->get();
           $variationsdetails=Variations::orderBy('id', 'asc')->get();
            $valuesdetails=Variationsvalues::orderBy('id', 'asc')->get();
             $attributedetails=Attributes::orderBy('id', 'asc')->get();
         return view('admin.products.add_attribute',compact('productsDetails','variationscategories','unitdetails','variationsdetails','valuesdetails','attributedetails'));


     }

}
