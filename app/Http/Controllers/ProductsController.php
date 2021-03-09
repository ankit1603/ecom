<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session;
use App\MainCategory;
use App\Brand;
use App\Country;
use App\Manufacturer;
use App\Products;
Use Image;
use App\Inventory;
use App\Inventoryvariations;
use App\Productimage;




class ProductsController extends Controller
{
    public function addproduct(Request $request){

    if($user = Auth::user())
            {
          $id = $user->user_id;
          $rollid=$user->roll_id;
         
            }

        if($request->isMethod('post')){
            $data = $request->all();

            $products = new Products;
            $products->shop_id  = $rollid;
            $products->manufacturer_id = $data['manufacturer'];
            
            $products->brand = $data['brand'];
            $products->name  = $data['name'];
            $products->active = $data['status'];
            $products->model_number = $data['modelnumber'];
            $products->mpn = $data['mpn'];
            $products->gtin = $data['gtin'];
            $products->gtin_type = $data['gtintype'];
            $products->description = $data['description'];
           /* $products->tag =$data['tag'];*/
             $products->categoryid = $data['category'];
            $products->min_price = $data['minprice'];
            $products->max_price = $data['maxprice'];
            $products->origin_country = $data['origin'];
           
            $products->videolink = $data['videolink'];
            $products->has_variant = $data['has_variant'];
              //Image upload
              if($request->hasfile('image')){

               $img_tmp = $request->file('image');
               

                if($img_tmp->isValid()){
                //Image Path Code

                $extension = $img_tmp->GetClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $img_path = 'upload/product/'.$filename;

                //Image Resize

                Image::make($img_tmp)->resize(100,100)->save($img_path);

                $products->image=$filename;

            }
            
            }

             $products->slug  = $data['gtin'];

             $products->save();
            return redirect('/admin/view')->with('flash_message_success','Product Added Successfully');
           

        }
 if ($rollid==1) {
    	$category = new MainCategory;
    	$category = MainCategory::get();
    	$categoty_dropdown = "<option selected disabled>Select</option>";
    	foreach ($category as $key) {
    		$categoty_dropdown .= "<option value='".$key->id."'>".$key->name."</option>";


    	}

    	$brand = Brand::where('active','1')->get();
    	$country = Country::where('active','1')->get();
        $manufacturer = Manufacturer::where('active','1')->get();

    	return view('admin.products.create_product')->with(compact('categoty_dropdown','brand','country','manufacturer','category'));

    }
    else{
        $category = new MainCategory;
        $category = MainCategory::get();
        $categoty_dropdown = "<option selected disabled>Select</option>";
        foreach ($category as $key) {
            $categoty_dropdown .= "<option value='".$key->id."'>".$key->name."</option>";

        }

        $brand = Brand::where('active','1')->get();
        $country = Country::where('active','1')->get();
        $manufacturer = Manufacturer::where('active','1')->get();
        $category = MainCategory::where('active','1')->get();


        return view('vendor.products.create_product')->with(compact('categoty_dropdown','brand','country','manufacturer','category'));
    }
    }


        public function addproductimages(Request $request){

               

      
            $data = $request->all();

            $products = new Productimage;
           
            $products->productid = $data['productid'];

            if($request->hasfile('image')){

               $img_tmp = $request->file('image');
               

                if($img_tmp->isValid()){
                //Image Path Code

                $extension = $img_tmp->GetClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $img_path = 'upload/product/'.$filename;

                //Image Resize

                Image::make($img_tmp)->resize(970,1000)->save($img_path);

                $products->image=$filename;

            }
            
            }

             $products->save();
            return redirect('/vendor/create')->with('flash_message_success','Image Added Successfully');
    }


    public function product(Request $request){
        if($user = Auth::user())
            {
          $id = $user->user_id;
          $rollid=$user->roll_id;
         
            }
            if ($rollid==1) {
         $Products = Products::get();

        $categorydetails=MainCategory::orderBy('id', 'asc')->get();

        return view('admin.products.view_products',compact('Products','categorydetails'));
    }
    else{
        $Products = Products::get();

        $categorydetails=MainCategory::orderBy('id', 'asc')->get();

        return view('vendor.products.view_products',compact('Products','categorydetails'));
    }
    }


         public static function viewAttribute(){
        if($user = Auth::user())
            {
          $id = $user->user_id;
          $rollid=$user->roll_id;
         
            }
            if ($rollid==1) {
         $Inventory = Inventory::get();

         $inventorydetails=Inventory::where('product_id',$id)->get();

        return view('admin.products.view_inventory',compact('Inventory','inventorydetails'));
    }
    else{
        $Inventory = Inventory::get();

         $inventorydetails=Inventory::where('product_id',$id)->get();

        return view('vendor.products.view_inventory',compact('Inventory','inventorydetails'));
    }
    }

    public static function inventoryplanning(){
        if($user = Auth::user())
            {
          $id = $user->user_id;
          $rollid=$user->roll_id;
         
            }
            if ($rollid==1) {
         $Inventory = Inventory::get();

         $inventorydetails=Inventory::where('product_id',$id)->get();

        return view('vendor.products.inventory_planning',compact('Inventory','inventorydetails'));
    }
    else{
        $Inventory = Inventory::get();

         $inventorydetails=Inventory::where('product_id',$id)->get();

        return view('vendor.products.inventory_planning',compact('Inventory','inventorydetails'));
    }
    }

     public function deleteinventory(Request $request,$id){
      if($user = Auth::user())
            {
          $id = $user->user_id;
          $rollid=$user->roll_id;
         
            }
             if ($rollid==1) {
       $categorydetails = new Inventory;
        $categorydetails = Inventory::where('id', '=', $id)->orderBy('id', 'asc')->get();
       

         $categorydetails = new Inventory;
          $categorydetails->where('id', '=', $id)->delete();
        $categorydetails = Inventory::orderBy('sku', 'asc')->get();

        return redirect('/admin/view-inventory/'.$categorydetails[0]->product_id)->with('flash_message_success','Product Deleted Successfully');
      }
      else {
          $categorydetails = new Inventory;
        $categorydetails = Inventory::where('id', '=', $id)->orderBy('id', 'asc')->get();
       

         $categorydetails = new Inventory;
          $categorydetails->where('id', '=', $id)->delete();
        $categorydetails = Inventory::orderBy('sku', 'asc')->get();

        return redirect('/vendor/inventory-planning/'.$categorydetails[0]->product_id)->with('flash_message_success','Product Deleted Successfully');
      }




    }


    
    /* public function viewAttribute(Request $request){
        if($user = Auth::user())
            {
          $id = $user->user_id;
          $rollid=$user->roll_id;
         
            }
            $inventorydetails=Inventory::where('product_id',$id)->get();
            if ($rollid==1) {
        
        return view('admin.products.view_inventory')->with(compact('inventorydetails'));
    }
       
        else {
      return view('vendor.products.view_inventory')->with(compact('inventorydetails'));

     }
 }*/

     public function index(Request $request)

      {
        return Product::filter($request)->get();
      }

      public function deleteproducts(Request $request,$id){

       $categorydetails = new Products;
        $categorydetails = Products::where('id', '=', $id)->orderBy('id', 'asc')->get();
       

         $categorydetails = new Products;
          $categorydetails->where('id', '=', $id)->delete();
        $categorydetails = Products::orderBy('name', 'asc')->get();

        return redirect('/vendor/view/'.$categorydetails[0]->product_id)->with('flash_message_success','Product Deleted Successfully');




    }
    public function viewproducts(Request $request)
    {
       
    }
    public function editproducts($id){
    $products = Products::find($id);
    return view('vendor.editproducts', ['products'=>$products]);
}

   
public function saveEdit(Request $request, $id){
    $products = Products::find($id);

    $products->product_name = $request->get('catname');
    
    $products->gtin = $request->get('gtin');
    $products->category = $request->get('category');
    $products->description = $request->get('description');
      if($request->hasfile('image')){

               $img_tmp = $request->file('image');
               

                if($img_tmp->isValid()){
                //Image Path Code

                $extension = $img_tmp->GetClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $img_path = 'upload/product/'.$filename;

                //Image Resize

                Image::make($img_tmp)->resize(100,100)->save($img_path);

                $products->image=$filename;

            }
            
            }
    $products->save();
    return redirect('/vendor/view/')->with('flash_message_success','Products Updated Successfully');
}
}