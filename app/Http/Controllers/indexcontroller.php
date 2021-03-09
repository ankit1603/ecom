<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Brand;
use App\Category;
use App\CategorySubGroup;
use App\MainCategory;
use App\Products;
use App\Variationscategories;
use App\Variations;
use App\Variationsvalues;
use App\Units;
use App\Inventory;
use App\User;
use App\pages;
use  App\Addtocart;
use DB;
use  App\Customer;
use  App\CustomerAddress;
use  App\CustomerOrder;
use  App\ProductOrder;
use  Auth;
use  App\wishlist;

class indexcontroller extends Controller
{
  

    public function index(){
           
    	$slider = Slider::where('status','1')->orderby('order','asc')->get();

            $brand = Brand::where('active','1')->get();
            
        $featurepro=Inventory::where('feature_p_status','1')->take(6)->get();
        
            $subcategory = Category::where('active','1')->get();
            $womencat = Category::where('id','3')->get();
        $subcategorydsc = Category::where('active','1')->orderby('id','DESC')->take(1)->get();
        $dscid=$subcategorydsc[0]->id;
         $subcategoryasc = Category::where('active','1')->orderby('id','asc')->take(1)->get();
         $ascid=$subcategoryasc[0]->id;
          $subcategoryrandom = Category::where('active','1')->inRandomOrder()->take(2)->get();
        $subcategoryrandoms = Category::where('id','!=',$ascid)->where('id','!=',$dscid)->where('active','1')->inRandomOrder()->take(2)->get();
          $productsrandom = Products::where('active','1')->inRandomOrder()->take(12)->get();
           $categrandom = MainCategory::where('active','1')->inRandomOrder()->take(6)->get();
            $categrandomt = MainCategory::where('active','1')->inRandomOrder()->take(12)->get();
            $pages = pages::where('id','13')->get();
    
            
    $subgroup = CategorySubGroup::where('active','1')->get();
    $subgrouprandom = CategorySubGroup::where('active','1')->inRandomOrder()->take(2)->get();
    $subgrouprandomi = CategorySubGroup::where('active','1')->inRandomOrder()->take(3)->get();
     $subgrouprandomt = CategorySubGroup::where('active','1')->inRandomOrder()->take(10)->get();
     $youmaylike = Inventory::where('active','1')->inRandomOrder()->take(4)->get();

    

    $maincategory = MainCategory::where('active','1')->get();

    	

    	return view('storefront.index')->with(compact('slider','brand','subcategory','subgroup','maincategory','subcategorydsc','subcategoryasc','subcategoryrandom','productsrandom','categrandom','subgrouprandom','categrandomt','subgrouprandomt','subcategoryrandoms','featurepro','womencat','youmaylike','subgrouprandomi','pages'));
    }




    public function gopages($id){
        $slider = Slider::where('status','1')->orderby('order','asc')->get();

        $brand = Brand::where('active','1')->get();
        
    $featurepro=Inventory::where('feature_p_status','1')->take(6)->get();
    
        $subcategory = Category::where('active','1')->get();
        $pages = pages::where('id',$id)->get();
    $subcategorydsc = Category::where('active','1')->orderby('id','DESC')->take(1)->get();
    $dscid=$subcategorydsc[0]->id;
     $subcategoryasc = Category::where('active','1')->orderby('id','asc')->take(1)->get();
     $ascid=$subcategoryasc[0]->id;
      $subcategoryrandom = Category::where('active','1')->inRandomOrder()->take(2)->get();
    $subcategoryrandoms = Category::where('id','!=',$ascid)->where('id','!=',$dscid)->where('active','1')->inRandomOrder()->take(2)->get();
      $productsrandom = Products::where('active','1')->inRandomOrder()->take(12)->get();
       $categrandom = MainCategory::where('active','1')->inRandomOrder()->take(6)->get();
        $categrandomt = MainCategory::where('active','1')->inRandomOrder()->take(12)->get();


        
$subgroup = CategorySubGroup::where('active','1')->get();
$subgrouprandom = CategorySubGroup::where('active','1')->inRandomOrder()->take(2)->get();
$subgrouprandomi = CategorySubGroup::where('active','1')->inRandomOrder()->take(3)->get();
 $subgrouprandomt = CategorySubGroup::where('active','1')->inRandomOrder()->take(10)->get();
 $youmaylike = Inventory::where('active','1')->inRandomOrder()->take(4)->get();



$maincategory = MainCategory::where('active','1')->get();

        

        return view('storefront.pages')->with(compact('slider','brand','subcategory','subgroup','maincategory','subcategorydsc','subcategoryasc','subcategoryrandom','productsrandom','categrandom','subgrouprandom','categrandomt','subgrouprandomt','subcategoryrandoms','featurepro','pages','youmaylike','subgrouprandomi'));


    }









     public function registertosale(){

        $slider = Slider::where('status','1')->orderby('order','asc')->get();

        $brand = Brand::where('active','1')->get();
        
        $subcategory = Category::where('active','1')->get();

        foreach($subcategory as $key => $cat){
            $cat_id = $cat->id;

        }

    $subgroup = CategorySubGroup::where('category_group_id','1')->get();

    foreach($subgroup as $catn){
            $cat_id = $catn->id;

        }

    $maincategory = MainCategory::where('category_sub_group_id','1')->get();
      
        

        return view('storefront.registertosale')->with(compact('slider','brand','subcategory','subgroup','maincategory'));
    }

    public static function randomsubgroup($id) {


        $subgrouprandom = CategorySubGroup::where('active','1')->where('category_group_id',$id)->inRandomOrder()->take(2)->get();

return $subgrouprandom;
}
public static function wrandomsubgroup($id) {


        $wsubgrouprandom = CategorySubGroup::where('active','1')->where('category_group_id',$id)->inRandomOrder()->take(1)->get();

return $wsubgrouprandom;
}




public static function foursubgroup($id) {


        $subgrouprandom = CategorySubGroup::where('active','1')->where('category_group_id',$id)->inRandomOrder()->take(4)->get();

return $subgrouprandom;
}
 public static function allsubgroup($id) {


        $subgrouprandom = CategorySubGroup::where('active','1')->where('category_group_id',$id)->get();

return $subgrouprandom;
}
  public static function randomcategory($id) {


        $subgrouprandom = MainCategory::where('active','1')->where('category_sub_group_id',$id)->inRandomOrder()->take(3)->get();

return $subgrouprandom;
}
 public static function randomcategoryf($id) {


        $subgrouprandom = MainCategory::where('active','1')->where('category_sub_group_id',$id)->inRandomOrder()->take(5)->get();

return $subgrouprandom;
}
public static function randomcategoryo($id) {


        $subgrouprandom = MainCategory::where('active','1')->where('category_sub_group_id',$id)->inRandomOrder()->take(1)->get();

return $subgrouprandom;
}
public static function randomcategoryt($id) {


        $subgrouprandom = MainCategory::where('active','1')->where('category_sub_group_id',$id)->inRandomOrder()->take(2)->get();

return $subgrouprandom;
}

public static function randomproduct($id) {


        $subgrouprandom = Products::where('active','1')->where('categoryid',$id)->inRandomOrder()->take(2)->get();

return $subgrouprandom;
}

public static function wrandomproduct($id) {


        $wsubgrouprandom = Products::where('active','1')->where('categoryid',$id)->inRandomOrder()->take(6)->get();

return $wsubgrouprandom;
}

public static function wrandomproducti($id) {


        $wsubgrouprandomi = Products::where('active','1')->where('categoryid',$id)->inRandomOrder()->take(3)->get();

return $wsubgrouprandomi;
}


public static function featurerprod($product_id){


        $featupname = Products::where('id',$product_id)->get();

        return $featupname;
}






public static function randomproductt($id) {


        $subgrouprandom = Products::where('active','1')->where('categoryid',$id)->inRandomOrder()->take(1)->get();

return $subgrouprandom;
}
public static function randomproducttt($id) {


        $subgrouprandom = Products::where('active','1')->where('categoryid',$id)->inRandomOrder()->take(3)->get();

return $subgrouprandom;
}
public static function randomproductttt($id) {


        $subgrouprandom = Products::where('active','1')->where('categoryid',$id)->inRandomOrder()->take(15)->get();

return $subgrouprandom;
}
public static function categorydetails($id) {


        $subgrouprandom = MainCategory::where('active','1')->where('id',$id)->get();

return $subgrouprandom;
}

public static function groupdetails($id) {


        $subgrouprandom = Category::where('active','1')->where('id',$id)->get();

return $subgrouprandom;
}
public static function productdetails($id) {


        $subgrouprandom = Products::where('active','1')->where('id',$id)->get();

return $subgrouprandom;
}

public static function addressdetails($id) {


        $subgrouprandom = CustomerAddress::where('id',$id)->get();

return $subgrouprandom;
}

public static function userproductdetails($id) {


        $subgrouprandom = Addtocart::where('status','1')->where('userid',$id)->get();

return $subgrouprandom;
}

public static function viewproductt($id) {


        $subgrouprandom = Products::where('active','1')->where('categoryid',$id)->get();

return $subgrouprandom;
}
public static function viewproductts($id) {


        $subgrouprandom = Products::where('active','1')->where('categoryid',$id)->paginate(16);

return $subgrouprandom;
}
public static function viewproducttall() {


        $subgrouprandom = Products::where('active','1')->get();

return $subgrouprandom;
}
public static function viewbranddetail($id) {
 

        $subgrouprandom = Brand::where('active','1')->where('id',$id)->get();

return $subgrouprandom;
}
public static function viewvariationdetail($id) {
 

        $subgrouprandom = Variations::where('status','1')->where('id',$id)->get();

return $subgrouprandom;
}
public static function variationvaluedetail($id) {
 

        $subgrouprandom = Variationsvalues::where('status','1')->where('variationsid',$id)->get();

return $subgrouprandom;
}
public static function variationunitdetail($id) {
 

        $subgrouprandom = Units::where('status','1')->where('id',$id)->get();

return $subgrouprandom;
}

public static function totalwishlist() {
   if($user = Auth::user())
            {
             $userid = $user->id;
            }else{

                $userid="";
            }

         $subgrouprandom = wishlist::where('userid',$userid)->get()->count();


return $subgrouprandom;
}    
public static function totalitemincart() {
   if($user = Auth::user())
            {
             $userid = $user->id;
            $subgrouprandom = Addtocart::where('userid',$userid)->where('status',1)->get()->count();
            }else{

                if(session('cart')){
                        $i=0;
                foreach(session('cart') as $id => $details)
                {
                   $i=$i+1;
                }

                }
                else{

                  $i="";
                }

                $subgrouprandom=$i;
            }

return $subgrouprandom;
}
public static function wishlistsss() {
   if($user = Auth::user())
            {
             $userid = $user->id;
             $wishlistvar = wishlist::where('userid',$user->id)->get();
            }

return $wishlistvar;
}
public function category($id){
        $slider = Slider::where('status','1')->orderby('order','asc')->get();

        $brand = Brand::where('active','1')->get();
        
        $subcategory = Category::where('active','1')->get();
        $subcategorydsc = Category::where('active','1')->orderby('id','DESC')->take(1)->get();
        $dscid=$subcategorydsc[0]->id;
         $subcategoryasc = Category::where('active','1')->orderby('id','asc')->take(1)->get();
         $ascid=$subcategoryasc[0]->id;
          $subcategoryrandom = Category::where('active','1')->inRandomOrder()->take(2)->get();
        $subcategoryrandoms = Category::where('id','!=',$ascid)->where('id','!=',$dscid)->where('active','1')->inRandomOrder()->take(2)->get();
          $productsrandom = Products::where('active','1')->inRandomOrder()->take(12)->get();
           $categrandom = MainCategory::where('active','1')->inRandomOrder()->take(6)->get();
            $categrandomt = MainCategory::where('active','1')->inRandomOrder()->take(12)->get();

    

    $subgroup = CategorySubGroup::where('active','1')->get();
    $subgrouprandom = CategorySubGroup::where('active','1')->inRandomOrder()->take(2)->get();
     $subgrouprandomt = CategorySubGroup::where('active','1')->inRandomOrder()->take(10)->get();

    

    $maincategory = MainCategory::where('active','1')->get();
      $subgrouprandomad = Products::where('active','1')->where('categoryid',$id)->paginate(16);
         $brandbycat=  Products::where('active','1')->where('categoryid',$id)->select('brand')
            ->groupBy('brand')
            ->get();
      $variationacccat = Variationscategories::where('categoryid',$id)->get();    
     
           

        

        return view('storefront.indexcategory')->with(compact('slider','brand','subcategory','subgroup','maincategory','subcategorydsc','subcategoryasc','subcategoryrandom','productsrandom','categrandom','subgrouprandom','categrandomt','subgrouprandomt','subcategoryrandoms','id','subgrouprandomad','brandbycat','variationacccat'));
    }

   function fetch_data()
    {

     

        $subgrouprandomad = Products::where('active','1')->where('categoryid',$id)->paginate(16);
      return  view('storefront.paginationdata', compact('subgrouprandomad'));

     
    }

    

    public function groups($id){
        $slider = Slider::where('status','1')->orderby('order','asc')->get();

        $brand = Brand::where('active','1')->get();
        $pages = pages::where('id',$id)->get();
        $subcategory = Category::where('active','1')->get();
        $subcategorydsc = Category::where('active','1')->orderby('id','DESC')->take(1)->get();
        $dscid=$subcategorydsc[0]->id;
         $subcategoryasc = Category::where('active','1')->orderby('id','asc')->take(1)->get();
         $ascid=$subcategoryasc[0]->id;
          $subcategoryrandom = Category::where('active','1')->inRandomOrder()->take(2)->get();
        $subcategoryrandoms = Category::where('id','!=',$ascid)->where('id','!=',$dscid)->where('active','1')->inRandomOrder()->take(2)->get();
          $productsrandom = Products::where('active','1')->inRandomOrder()->take(12)->get();
           $categrandom = MainCategory::where('active','1')->inRandomOrder()->take(6)->get();
            $categrandomt = MainCategory::where('active','1')->inRandomOrder()->take(12)->get();

    

    $subgroup = CategorySubGroup::where('active','1')->get();
    $subgrouprandom = CategorySubGroup::where('active','1')->inRandomOrder()->take(2)->get();
     $subgrouprandomt = CategorySubGroup::where('active','1')->inRandomOrder()->take(10)->get();

    

    $maincategory = MainCategory::where('active','1')->get();

        

        return view('storefront.indexgroups')->with(compact('slider','brand','pages','subcategory','subgroup','maincategory','subcategorydsc','subcategoryasc','subcategoryrandom','productsrandom','categrandom','subgrouprandom','categrandomt','subgrouprandomt','subcategoryrandoms','id'));
    }


     public function product($id){
        $slider = Slider::where('status','1')->orderby('order','asc')->get();

        $brand = Brand::where('active','1')->get();
        $pages = pages::where('id','13')->get();
        $subcategory = Category::where('active','1')->get();
        $subcategorydsc = Category::where('active','1')->orderby('id','DESC')->take(1)->get();
        $dscid=$subcategorydsc[0]->id;
         $subcategoryasc = Category::where('active','1')->orderby('id','asc')->take(1)->get();
         $ascid=$subcategoryasc[0]->id;
          $subcategoryrandom = Category::where('active','1')->inRandomOrder()->take(2)->get();
        $subcategoryrandoms = Category::where('id','!=',$ascid)->where('id','!=',$dscid)->where('active','1')->inRandomOrder()->take(2)->get();
          $productsrandom = Products::where('active','1')->inRandomOrder()->take(12)->get();
           $categrandom = MainCategory::where('active','1')->inRandomOrder()->take(6)->get();
            $categrandomt = MainCategory::where('active','1')->inRandomOrder()->take(12)->get();

    

    $subgroup = CategorySubGroup::where('active','1')->get();
    $subgrouprandom = CategorySubGroup::where('active','1')->inRandomOrder()->take(2)->get();
     $subgrouprandomt = CategorySubGroup::where('active','1')->inRandomOrder()->take(10)->get();

    

    $maincategory = MainCategory::where('active','1')->get();
    $proddetails=Products::where('active','1')->where('id',$id)->get();
    $catofprod=$proddetails[0]->categoryid;
     $brandbycat=  Products::where('active','1')->where('categoryid',$catofprod)->select('brand')
            ->groupBy('brand')
            ->get();
    $variationacccat = Variationscategories::where('categoryid',$catofprod)->get();  
     $InventoryProd = Inventory::where('product_id',$id)->get();     

        

        return view('storefront.indexproduct')->with(compact('slider','brand','subcategory','subgroup','maincategory','subcategorydsc','subcategoryasc','subcategoryrandom','productsrandom','categrandom','subgrouprandom','categrandomt','subgrouprandomt','subcategoryrandoms','id','brandbycat','variationacccat','InventoryProd','pages'));
    }

         public function cart($id){
        $slider = Slider::where('status','1')->orderby('order','asc')->get();

        $brand = Brand::where('active','1')->get();
        
        $subcategory = Category::where('active','1')->get();
        $subcategorydsc = Category::where('active','1')->orderby('id','DESC')->take(1)->get();
        $dscid=$subcategorydsc[0]->id;
         $subcategoryasc = Category::where('active','1')->orderby('id','asc')->take(1)->get();
         $ascid=$subcategoryasc[0]->id;
          $subcategoryrandom = Category::where('active','1')->inRandomOrder()->take(2)->get();
        $subcategoryrandoms = Category::where('id','!=',$ascid)->where('id','!=',$dscid)->where('active','1')->inRandomOrder()->take(2)->get();
          $productsrandom = Products::where('active','1')->inRandomOrder()->take(12)->get();
           $categrandom = MainCategory::where('active','1')->inRandomOrder()->take(6)->get();
            $categrandomt = MainCategory::where('active','1')->inRandomOrder()->take(12)->get();

    

    $subgroup = CategorySubGroup::where('active','1')->get();
    $subgrouprandom = CategorySubGroup::where('active','1')->inRandomOrder()->take(2)->get();
     $subgrouprandomt = CategorySubGroup::where('active','1')->inRandomOrder()->take(10)->get();

    

    $maincategory = MainCategory::where('active','1')->get();
    $proddetails=Products::where('active','1')->where('id',$id)->get();
    $catofprod=$proddetails[0]->categoryid;
     $brandbycat=  Products::where('active','1')->where('categoryid',$catofprod)->select('brand')
            ->groupBy('brand')
            ->get();
    $variationacccat = Variationscategories::where('categoryid',$catofprod)->get();  
     $InventoryProd = Inventory::where('product_id',$id)->get();     

        

        return view('storefront.indexcart')->with(compact('slider','brand','subcategory','subgroup','maincategory','subcategorydsc','subcategoryasc','subcategoryrandom','productsrandom','categrandom','subgrouprandom','categrandomt','subgrouprandomt','subcategoryrandoms','id','brandbycat','variationacccat','InventoryProd'));
    }
      public function mycart(){
        $slider = Slider::where('status','1')->orderby('order','asc')->get();

        $brand = Brand::where('active','1')->get();
        
        $subcategory = Category::where('active','1')->get();
        $subcategorydsc = Category::where('active','1')->orderby('id','DESC')->take(1)->get();
        $dscid=$subcategorydsc[0]->id;
         $subcategoryasc = Category::where('active','1')->orderby('id','asc')->take(1)->get();
         $ascid=$subcategoryasc[0]->id;
          $subcategoryrandom = Category::where('active','1')->inRandomOrder()->take(2)->get();
        $subcategoryrandoms = Category::where('id','!=',$ascid)->where('id','!=',$dscid)->where('active','1')->inRandomOrder()->take(2)->get();
          $productsrandom = Products::where('active','1')->inRandomOrder()->take(12)->get();
           $categrandom = MainCategory::where('active','1')->inRandomOrder()->take(6)->get();
            $categrandomt = MainCategory::where('active','1')->inRandomOrder()->take(12)->get();

    

    $subgroup = CategorySubGroup::where('active','1')->get();
    $subgrouprandom = CategorySubGroup::where('active','1')->inRandomOrder()->take(2)->get();
     $subgrouprandomt = CategorySubGroup::where('active','1')->inRandomOrder()->take(10)->get();

    

    $maincategory = MainCategory::where('active','1')->get();
    $proddetails=Products::where('active','1')->get();
    $catofprod=$proddetails[0]->categoryid;
     $brandbycat=  Products::where('active','1')->where('categoryid',$catofprod)->select('brand')
            ->groupBy('brand')
            ->get();
    $variationacccat = Variationscategories::where('categoryid',$catofprod)->get();  
     $InventoryProd = Inventory::get();     

        

        return view('storefront.indexmycart')->with(compact('slider','brand','subcategory','subgroup','maincategory','subcategorydsc','subcategoryasc','subcategoryrandom','productsrandom','categrandom','subgrouprandom','categrandomt','subgrouprandomt','subcategoryrandoms','brandbycat','variationacccat','InventoryProd'));
    }

     public function checkout(){
        $slider = Slider::where('status','1')->orderby('order','asc')->get();

        $brand = Brand::where('active','1')->get();
        
        $subcategory = Category::where('active','1')->get();
        $subcategorydsc = Category::where('active','1')->orderby('id','DESC')->take(1)->get();
        $dscid=$subcategorydsc[0]->id;
         $subcategoryasc = Category::where('active','1')->orderby('id','asc')->take(1)->get();
         $ascid=$subcategoryasc[0]->id;
        $subcategoryrandom = Category::where('active','1')->inRandomOrder()->take(2)->get();
        $subcategoryrandoms = Category::where('id','!=',$ascid)->where('id','!=',$dscid)->where('active','1')->inRandomOrder()->take(2)->get();
          $productsrandom = Products::where('active','1')->inRandomOrder()->take(12)->get();
           $categrandom = MainCategory::where('active','1')->inRandomOrder()->take(6)->get();
            $categrandomt = MainCategory::where('active','1')->inRandomOrder()->take(12)->get();

    

    $subgroup = CategorySubGroup::where('active','1')->get();
    $subgrouprandom = CategorySubGroup::where('active','1')->inRandomOrder()->take(2)->get();
     $subgrouprandomt = CategorySubGroup::where('active','1')->inRandomOrder()->take(10)->get();

    

    $maincategory = MainCategory::where('active','1')->get();
    $proddetails=Products::where('active','1')->get();
    $catofprod=$proddetails[0]->categoryid;
     $brandbycat=  Products::where('active','1')->where('categoryid',$catofprod)->select('brand')
            ->groupBy('brand')
            ->get();
    $variationacccat = Variationscategories::where('categoryid',$catofprod)->get();  
     $InventoryProd = Inventory::get();     
     if($user = Auth::user())
            {
              $userid = $user->user_id;

              $customeraddress = CustomerAddress::where('customer_id',$userid)->get();  
            }
            else{
               $customeraddress="";

            }
    
        

        return view('storefront.indexcheckout')->with(compact('slider','brand','subcategory','subgroup','maincategory','subcategorydsc','subcategoryasc','subcategoryrandom','productsrandom','categrandom','subgrouprandom','categrandomt','subgrouprandomt','subcategoryrandoms','brandbycat','variationacccat','InventoryProd','customeraddress'));
    }
    public function register(){
        $slider = Slider::where('status','1')->orderby('order','asc')->get();

        $brand = Brand::where('active','1')->get();
        
        $subcategory = Category::where('active','1')->get();
        $subcategorydsc = Category::where('active','1')->orderby('id','DESC')->take(1)->get();
        $dscid=$subcategorydsc[0]->id;
         $subcategoryasc = Category::where('active','1')->orderby('id','asc')->take(1)->get();
         $ascid=$subcategoryasc[0]->id;
        $subcategoryrandom = Category::where('active','1')->inRandomOrder()->take(2)->get();
        $subcategoryrandoms = Category::where('id','!=',$ascid)->where('id','!=',$dscid)->where('active','1')->inRandomOrder()->take(2)->get();
          $productsrandom = Products::where('active','1')->inRandomOrder()->take(12)->get();
           $categrandom = MainCategory::where('active','1')->inRandomOrder()->take(6)->get();
            $categrandomt = MainCategory::where('active','1')->inRandomOrder()->take(12)->get();

    

    $subgroup = CategorySubGroup::where('active','1')->get();
    $subgrouprandom = CategorySubGroup::where('active','1')->inRandomOrder()->take(2)->get();
     $subgrouprandomt = CategorySubGroup::where('active','1')->inRandomOrder()->take(10)->get();

    

    $maincategory = MainCategory::where('active','1')->get();
    $proddetails=Products::where('active','1')->get();
    $catofprod=$proddetails[0]->categoryid;
     $brandbycat=  Products::where('active','1')->where('categoryid',$catofprod)->select('brand')
            ->groupBy('brand')
            ->get();
    $variationacccat = Variationscategories::where('categoryid',$catofprod)->get();  
     $InventoryProd = Inventory::get();     
     if($user = Auth::user())
            {
              $userid = $user->user_id;

              $customeraddress = CustomerAddress::where('customer_id',$userid)->get();  
            }
            else{
               $customeraddress="";

            }
    
        

        return view('storefront.indexregister')->with(compact('slider','brand','subcategory','subgroup','maincategory','subcategorydsc','subcategoryasc','subcategoryrandom','productsrandom','categrandom','subgrouprandom','categrandomt','subgrouprandomt','subcategoryrandoms','brandbycat','variationacccat','InventoryProd','customeraddress'));
    }

     public function myAccount(){
        $slider = Slider::where('status','1')->orderby('order','asc')->get();

        $brand = Brand::where('active','1')->get();
        
        $subcategory = Category::where('active','1')->get();
        $subcategorydsc = Category::where('active','1')->orderby('id','DESC')->take(1)->get();
        $dscid=$subcategorydsc[0]->id;
         $subcategoryasc = Category::where('active','1')->orderby('id','asc')->take(1)->get();
         $ascid=$subcategoryasc[0]->id;
        $subcategoryrandom = Category::where('active','1')->inRandomOrder()->take(2)->get();
        $subcategoryrandoms = Category::where('id','!=',$ascid)->where('id','!=',$dscid)->where('active','1')->inRandomOrder()->take(2)->get();
          $productsrandom = Products::where('active','1')->inRandomOrder()->take(12)->get();
           $categrandom = MainCategory::where('active','1')->inRandomOrder()->take(6)->get();
            $categrandomt = MainCategory::where('active','1')->inRandomOrder()->take(12)->get();

    

    $subgroup = CategorySubGroup::where('active','1')->get();
    $subgrouprandom = CategorySubGroup::where('active','1')->inRandomOrder()->take(2)->get();
     $subgrouprandomt = CategorySubGroup::where('active','1')->inRandomOrder()->take(10)->get();

    

    $maincategory = MainCategory::where('active','1')->get();
    $proddetails=Products::where('active','1')->get();
    $catofprod=$proddetails[0]->categoryid;
     $brandbycat=  Products::where('active','1')->where('categoryid',$catofprod)->select('brand')
            ->groupBy('brand')
            ->get();
    $variationacccat = Variationscategories::where('categoryid',$catofprod)->get();  
     $InventoryProd = Inventory::get();     
     if($user = Auth::user())
            {
              $userid = $user->user_id;

              $customeraddress = CustomerAddress::where('customer_id',$userid)->get();  
            }
            else{
               $customeraddress="";

            }
    
        

        return view('storefront.indexmyaccount')->with(compact('slider','brand','subcategory','subgroup','maincategory','subcategorydsc','subcategoryasc','subcategoryrandom','productsrandom','categrandom','subgrouprandom','categrandomt','subgrouprandomt','subcategoryrandoms','brandbycat','variationacccat','InventoryProd','customeraddress'));
    }

         public function forgotpassword(){
        $slider = Slider::where('status','1')->orderby('order','asc')->get();

        $brand = Brand::where('active','1')->get();
        
        $subcategory = Category::where('active','1')->get();
        $subcategorydsc = Category::where('active','1')->orderby('id','DESC')->take(1)->get();
        $dscid=$subcategorydsc[0]->id;
         $subcategoryasc = Category::where('active','1')->orderby('id','asc')->take(1)->get();
         $ascid=$subcategoryasc[0]->id;
        $subcategoryrandom = Category::where('active','1')->inRandomOrder()->take(2)->get();
        $subcategoryrandoms = Category::where('id','!=',$ascid)->where('id','!=',$dscid)->where('active','1')->inRandomOrder()->take(2)->get();
          $productsrandom = Products::where('active','1')->inRandomOrder()->take(12)->get();
           $categrandom = MainCategory::where('active','1')->inRandomOrder()->take(6)->get();
            $categrandomt = MainCategory::where('active','1')->inRandomOrder()->take(12)->get();

    

    $subgroup = CategorySubGroup::where('active','1')->get();
    $subgrouprandom = CategorySubGroup::where('active','1')->inRandomOrder()->take(2)->get();
     $subgrouprandomt = CategorySubGroup::where('active','1')->inRandomOrder()->take(10)->get();

    

    $maincategory = MainCategory::where('active','1')->get();
    $proddetails=Products::where('active','1')->get();
    $catofprod=$proddetails[0]->categoryid;
     $brandbycat=  Products::where('active','1')->where('categoryid',$catofprod)->select('brand')
            ->groupBy('brand')
            ->get();
    $variationacccat = Variationscategories::where('categoryid',$catofprod)->get();  
     $InventoryProd = Inventory::get();     
     if($user = Auth::user())
            {
              $userid = $user->user_id;

              $customeraddress = CustomerAddress::where('customer_id',$userid)->get();  
            }
            else{
               $customeraddress="";

            }
    
        

        return view('storefront.indexforgotpassword')->with(compact('slider','brand','subcategory','subgroup','maincategory','subcategorydsc','subcategoryasc','subcategoryrandom','productsrandom','categrandom','subgrouprandom','categrandomt','subgrouprandomt','subcategoryrandoms','brandbycat','variationacccat','InventoryProd','customeraddress'));
    }

      public function changePassword(){
        $slider = Slider::where('status','1')->orderby('order','asc')->get();

        $brand = Brand::where('active','1')->get();
        
        $subcategory = Category::where('active','1')->get();
        $subcategorydsc = Category::where('active','1')->orderby('id','DESC')->take(1)->get();
        $dscid=$subcategorydsc[0]->id;
         $subcategoryasc = Category::where('active','1')->orderby('id','asc')->take(1)->get();
         $ascid=$subcategoryasc[0]->id;
        $subcategoryrandom = Category::where('active','1')->inRandomOrder()->take(2)->get();
        $subcategoryrandoms = Category::where('id','!=',$ascid)->where('id','!=',$dscid)->where('active','1')->inRandomOrder()->take(2)->get();
          $productsrandom = Products::where('active','1')->inRandomOrder()->take(12)->get();
           $categrandom = MainCategory::where('active','1')->inRandomOrder()->take(6)->get();
            $categrandomt = MainCategory::where('active','1')->inRandomOrder()->take(12)->get();

    

    $subgroup = CategorySubGroup::where('active','1')->get();
    $subgrouprandom = CategorySubGroup::where('active','1')->inRandomOrder()->take(2)->get();
     $subgrouprandomt = CategorySubGroup::where('active','1')->inRandomOrder()->take(10)->get();

    

    $maincategory = MainCategory::where('active','1')->get();
    $proddetails=Products::where('active','1')->get();
    $catofprod=$proddetails[0]->categoryid;
     $brandbycat=  Products::where('active','1')->where('categoryid',$catofprod)->select('brand')
            ->groupBy('brand')
            ->get();
    $variationacccat = Variationscategories::where('categoryid',$catofprod)->get();  
     $InventoryProd = Inventory::get();     
     if($user = Auth::user())
            {
              $userid = $user->user_id;

              $customeraddress = CustomerAddress::where('customer_id',$userid)->get();  
            }
            else{
               $customeraddress="";

            }
    
        

        return view('storefront.indexchangepassword')->with(compact('slider','brand','subcategory','subgroup','maincategory','subcategorydsc','subcategoryasc','subcategoryrandom','productsrandom','categrandom','subgrouprandom','categrandomt','subgrouprandomt','subcategoryrandoms','brandbycat','variationacccat','InventoryProd','customeraddress'));
    }

      public function AddressBook(){
        $slider = Slider::where('status','1')->orderby('order','asc')->get();

        $brand = Brand::where('active','1')->get();
        
        $subcategory = Category::where('active','1')->get();
        $subcategorydsc = Category::where('active','1')->orderby('id','DESC')->take(1)->get();
        $dscid=$subcategorydsc[0]->id;
         $subcategoryasc = Category::where('active','1')->orderby('id','asc')->take(1)->get();
         $ascid=$subcategoryasc[0]->id;
        $subcategoryrandom = Category::where('active','1')->inRandomOrder()->take(2)->get();
        $subcategoryrandoms = Category::where('id','!=',$ascid)->where('id','!=',$dscid)->where('active','1')->inRandomOrder()->take(2)->get();
          $productsrandom = Products::where('active','1')->inRandomOrder()->take(12)->get();
           $categrandom = MainCategory::where('active','1')->inRandomOrder()->take(6)->get();
            $categrandomt = MainCategory::where('active','1')->inRandomOrder()->take(12)->get();

    

    $subgroup = CategorySubGroup::where('active','1')->get();
    $subgrouprandom = CategorySubGroup::where('active','1')->inRandomOrder()->take(2)->get();
     $subgrouprandomt = CategorySubGroup::where('active','1')->inRandomOrder()->take(10)->get();

    

    $maincategory = MainCategory::where('active','1')->get();
    $proddetails=Products::where('active','1')->get();
    $catofprod=$proddetails[0]->categoryid;
     $brandbycat=  Products::where('active','1')->where('categoryid',$catofprod)->select('brand')
            ->groupBy('brand')
            ->get();
    $variationacccat = Variationscategories::where('categoryid',$catofprod)->get();  
     $InventoryProd = Inventory::get();     
     if($user = Auth::user())
            {
              $userid = $user->user_id;

              $customeraddress = CustomerAddress::where('customer_id',$userid)->get();  
            }
            else{
               $customeraddress="";

            }
    
        

        return view('storefront.indexaddressbook')->with(compact('slider','brand','subcategory','subgroup','maincategory','subcategorydsc','subcategoryasc','subcategoryrandom','productsrandom','categrandom','subgrouprandom','categrandomt','subgrouprandomt','subcategoryrandoms','brandbycat','variationacccat','InventoryProd','customeraddress'));
    }

          public function editaddress(Request $request){


            $data = $request->all();

            $id=$data['order'];

        $slider = Slider::where('status','1')->orderby('order','asc')->get();

        $brand = Brand::where('active','1')->get();
        
        $subcategory = Category::where('active','1')->get();
        $subcategorydsc = Category::where('active','1')->orderby('id','DESC')->take(1)->get();
        $dscid=$subcategorydsc[0]->id;
         $subcategoryasc = Category::where('active','1')->orderby('id','asc')->take(1)->get();
         $ascid=$subcategoryasc[0]->id;
        $subcategoryrandom = Category::where('active','1')->inRandomOrder()->take(2)->get();
        $subcategoryrandoms = Category::where('id','!=',$ascid)->where('id','!=',$dscid)->where('active','1')->inRandomOrder()->take(2)->get();
          $productsrandom = Products::where('active','1')->inRandomOrder()->take(12)->get();
           $categrandom = MainCategory::where('active','1')->inRandomOrder()->take(6)->get();
            $categrandomt = MainCategory::where('active','1')->inRandomOrder()->take(12)->get();

    

    $subgroup = CategorySubGroup::where('active','1')->get();
    $subgrouprandom = CategorySubGroup::where('active','1')->inRandomOrder()->take(2)->get();
     $subgrouprandomt = CategorySubGroup::where('active','1')->inRandomOrder()->take(10)->get();

    

    $maincategory = MainCategory::where('active','1')->get();
    $proddetails=Products::where('active','1')->get();
    $catofprod=$proddetails[0]->categoryid;
     $brandbycat=  Products::where('active','1')->where('categoryid',$catofprod)->select('brand')
            ->groupBy('brand')
            ->get();
    $variationacccat = Variationscategories::where('categoryid',$catofprod)->get();  
     $InventoryProd = Inventory::get();     
    if ($user = Auth::user()) {
    $userid = $user->user_id;

    $customeraddress = CustomerAddress::where('customer_id', $userid)->get();
} else {
    $customeraddress = "";

}

    
        

        return view('storefront.indexeditaddress')->with(compact('slider','brand','subcategory','subgroup','maincategory','subcategorydsc','subcategoryasc','subcategoryrandom','productsrandom','categrandom','subgrouprandom','categrandomt','subgrouprandomt','subcategoryrandoms','brandbycat','variationacccat','InventoryProd','customeraddress','id'));
    }
     public function myOrders(){
        $slider = Slider::where('status','1')->orderby('order','asc')->get();

        $brand = Brand::where('active','1')->get();
        
        $subcategory = Category::where('active','1')->get();
        $subcategorydsc = Category::where('active','1')->orderby('id','DESC')->take(1)->get();
        $dscid=$subcategorydsc[0]->id;
         $subcategoryasc = Category::where('active','1')->orderby('id','asc')->take(1)->get();
         $ascid=$subcategoryasc[0]->id;
        $subcategoryrandom = Category::where('active','1')->inRandomOrder()->take(2)->get();
        $subcategoryrandoms = Category::where('id','!=',$ascid)->where('id','!=',$dscid)->where('active','1')->inRandomOrder()->take(2)->get();
          $productsrandom = Products::where('active','1')->inRandomOrder()->take(12)->get();
           $categrandom = MainCategory::where('active','1')->inRandomOrder()->take(6)->get();
            $categrandomt = MainCategory::where('active','1')->inRandomOrder()->take(12)->get();

    

    $subgroup = CategorySubGroup::where('active','1')->get();
    $subgrouprandom = CategorySubGroup::where('active','1')->inRandomOrder()->take(2)->get();
     $subgrouprandomt = CategorySubGroup::where('active','1')->inRandomOrder()->take(10)->get();

    

    $maincategory = MainCategory::where('active','1')->get();
    $proddetails=Products::where('active','1')->get();
    $catofprod=$proddetails[0]->categoryid;
     $brandbycat=  Products::where('active','1')->where('categoryid',$catofprod)->select('brand')
            ->groupBy('brand')
            ->get();
    $variationacccat = Variationscategories::where('categoryid',$catofprod)->get();  
     $InventoryProd = Inventory::get();     
     if($user = Auth::user())
            {
              $userid = $user->user_id;

              $customeraddress = CustomerAddress::where('customer_id',$userid)->get(); 
               $customerorders = CustomerOrder::where('customerid',$userid)->get(); 

            }
            else{
               $customeraddress="";
               $customerorders="";

            }
    
        

        return view('storefront.indexmyorders')->with(compact('slider','brand','subcategory','subgroup','maincategory','subcategorydsc','subcategoryasc','subcategoryrandom','productsrandom','categrandom','subgrouprandom','categrandomt','subgrouprandomt','subcategoryrandoms','brandbycat','variationacccat','InventoryProd','customeraddress','customerorders'));
    }

     public function myWishlist(){
        $slider = Slider::where('status','1')->orderby('order','asc')->get();

        $brand = Brand::where('active','1')->get();
        
        $subcategory = Category::where('active','1')->get();
        $subcategorydsc = Category::where('active','1')->orderby('id','DESC')->take(1)->get();
        $dscid=$subcategorydsc[0]->id;
         $subcategoryasc = Category::where('active','1')->orderby('id','asc')->take(1)->get();
         $ascid=$subcategoryasc[0]->id;
        $subcategoryrandom = Category::where('active','1')->inRandomOrder()->take(2)->get();
        $subcategoryrandoms = Category::where('id','!=',$ascid)->where('id','!=',$dscid)->where('active','1')->inRandomOrder()->take(2)->get();
          $productsrandom = Products::where('active','1')->inRandomOrder()->take(12)->get();
           $categrandom = MainCategory::where('active','1')->inRandomOrder()->take(6)->get();
            $categrandomt = MainCategory::where('active','1')->inRandomOrder()->take(12)->get();

    

    $subgroup = CategorySubGroup::where('active','1')->get();
    $subgrouprandom = CategorySubGroup::where('active','1')->inRandomOrder()->take(2)->get();
     $subgrouprandomt = CategorySubGroup::where('active','1')->inRandomOrder()->take(10)->get();

    

    $maincategory = MainCategory::where('active','1')->get();
    $proddetails=Products::where('active','1')->get();
    $catofprod=$proddetails[0]->categoryid;
     $brandbycat=  Products::where('active','1')->where('categoryid',$catofprod)->select('brand')
            ->groupBy('brand')
            ->get();
    $variationacccat = Variationscategories::where('categoryid',$catofprod)->get();  
     $InventoryProd = Inventory::get();     
     if($user = Auth::user())
            {
               $userid = $user->user_id;

              $customeraddress = CustomerAddress::where('customer_id',$userid)->get(); 
               $customerorders = CustomerOrder::where('customerid',$userid)->get(); 

            }
            else{
               $customeraddress="";
               $customerorders="";

            }
            $wishlistvar = wishlist::where('userid',$user->id)->get();  
    
        

    return view('storefront.indexwishlist')->with(compact('slider','brand','subcategory','subgroup','maincategory','subcategorydsc','subcategoryasc','subcategoryrandom','productsrandom','categrandom','subgrouprandom','categrandomt','subgrouprandomt','subcategoryrandoms','brandbycat','variationacccat','InventoryProd','customeraddress','customerorders','wishlistvar'));
    }





     public function placeorder(Request $request){

       
            $data = $request->all();
              $products = new CustomerOrder;
               $user_id = $data['userid'];
            $products->customerid = $data['custid'];
            $products->user_id = $data['userid'];
            if ($data['newaddress']=="newadd") {
                 $adddresss = new CustomerAddress;
                 $adddresss->customer_id = $data['custid'];
                $adddresss->address_line_1 = $data['address'];
                $adddresss->landmark = $data['landmark'];
                $adddresss->area = $data['area'];
                $adddresss->address_type = $data['address_type'];
                $adddresss->city = $data['district'];
                 $adddresss->state = $data['state'];
                  $adddresss->zip_code = $data['pincode'];
                   $adddresss->name = $data['name'];
                    $adddresss->country_id = $data['custid'];
                     $adddresss->email = $data['email'];
                      $adddresss->phone = $data['mobile'];
                      $adddresss->save();
                        $lastid=$adddresss->id;
                        $products->customeraddress = $lastid;
            }
            else{
            $products->customeraddress = $data['newaddress'];
            }

            $products->TotalAmount = $data['totalamount'];
            $products->Total = $data['totalamount'];
            $products->Discount = 0;
            $products->Payment_Type = $data['payment-group'];
            if ($products->Payment_Type==3) {
                $products->order_status = 1;
            }
            else{
            $products->order_status = 1;
        }
            $products->payment_status = 0;
            $products->save();

             $lastid=$products->id;
            $productfromcart = Addtocart::where('status','1')->where('userid',$user_id)->get();
              foreach ($productfromcart as $prodfrmcrt) { 

                 $categoryvariations = new ProductOrder;
                 $categoryvariations->orderid=$lastid;
                   $categoryvariations->product_id=$prodfrmcrt->productid;
                     $categoryvariations->name=$prodfrmcrt->name;
                       $categoryvariations->image=$prodfrmcrt->productid;
                         $categoryvariations->status=$prodfrmcrt->status;
                           $categoryvariations->quantity=$prodfrmcrt->quantity;
                            $categoryvariations->price=$prodfrmcrt->price;
                 
                  $categoryvariations->save();
                    DB::table('add_to_cart')
                ->where('id', $prodfrmcrt->id)
                ->update(['status' =>0
               
                ]);
             
            }

                 
          
        $slider = Slider::where('status','1')->orderby('order','asc')->get();

        $brand = Brand::where('active','1')->get();
        
        $subcategory = Category::where('active','1')->get();
        $subcategorydsc = Category::where('active','1')->orderby('id','DESC')->take(1)->get();
        $dscid=$subcategorydsc[0]->id;
         $subcategoryasc = Category::where('active','1')->orderby('id','asc')->take(1)->get();
         $ascid=$subcategoryasc[0]->id;
        $subcategoryrandom = Category::where('active','1')->inRandomOrder()->take(2)->get();
        $subcategoryrandoms = Category::where('id','!=',$ascid)->where('id','!=',$dscid)->where('active','1')->inRandomOrder()->take(2)->get();
        $productsrandom = Products::where('active','1')->inRandomOrder()->take(12)->get();
        $categrandom = MainCategory::where('active','1')->inRandomOrder()->take(6)->get();
        $categrandomt = MainCategory::where('active','1')->inRandomOrder()->take(12)->get();

    

    $subgroup = CategorySubGroup::where('active','1')->get();
    $subgrouprandom = CategorySubGroup::where('active','1')->inRandomOrder()->take(2)->get();
     $subgrouprandomt = CategorySubGroup::where('active','1')->inRandomOrder()->take(10)->get();

    

    $maincategory = MainCategory::where('active','1')->get();
    $proddetails=Products::where('active','1')->get();
    $catofprod=$proddetails[0]->categoryid;
     $brandbycat=  Products::where('active','1')->where('categoryid',$catofprod)->select('brand')
            ->groupBy('brand')
            ->get();
    $variationacccat = Variationscategories::where('categoryid',$catofprod)->get();  
     $InventoryProd = Inventory::get();     
     if($user = Auth::user())
            {
             $userid = $user->user_id;

              $customeraddress = CustomerAddress::where('customer_id',$userid)->get();  
            }
            else{
               $customeraddress="";

            }
    
        

        return view('storefront.indexcheckout')->with(compact('slider','brand','subcategory','subgroup','maincategory','subcategorydsc','subcategoryasc','subcategoryrandom','productsrandom','categrandom','subgrouprandom','categrandomt','subgrouprandomt','subcategoryrandoms','brandbycat','variationacccat','InventoryProd','customeraddress'));
    }


public function searchcat(Request $request,$id)
{

    echo "string";die();
     $data = $request->all();

    echo  $catid=$data['cats'];die();
 
  

     $subgrouprandomad = Products::where('brand', $id)->get();
     return view('storefront.paginationdata', compact('subgrouprandomad'))->render();

   
}

public function remove(Request $request,$id)
    {
      
        if($id) {
            $cart = session()->get('cart');
            if(isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
            return redirect()->back()->with('success', 'Product deleted from cart successfully!');
        }
    }

    public function removes(Request $request,$id)
    {
      
        if($id) {
            $categorygroups = new Addtocart;
          $categorygroups->where('id', '=', $id)->delete();
           
            return redirect()->back()->with('success', 'Product deleted from cart successfully!');
        }
    }

    public function update(Request $request)
    {


    
        if($request->id and $request->quantity)
        {


               $nowquantity=$request->quantity;
        
            $Atcid=$request->id;
             DB::table('add_to_cart')
                ->where('id', $Atcid)
                ->update(['quantity' =>$nowquantity
               
                ]);
            
           
        }
    }

     public function updates(Request $request)
    {

       if($user = Auth::user())
            {
             

    if($request->id and $request->quantity)
        {
           $request->quantity;
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
             return redirect()->back()->with('success', 'Product added to cart successfully!');
           
        }
      }
      else{

       return redirect();
      }
    }

     public function registration(Request $request)
    {
       
      
            $data = $request->all();
            $adddresss = new Customer;
             $adddresss->name = $data['name'];
            $adddresss->email = $data['email'];
            $adddresss->phone = $data['mobile'];
            $adddresss->save();
            $lastid=$adddresss->id;

                $User = new User;
                $User->name = $data['name'];
                 $User->user_id = $lastid;

                 $User->email  = $data['email'];
                    $User->password  = bcrypt($data['password']);
                      $User->roll_id  = 4;
                      $User->save();
       
           
            //return redirect()->back()->with('success', 'Registration Completed successfully!');
                    return redirect('/myAccount');
        
    }

     public function wishlistdelete($id)
    {
       
      wishlist::find($id)->delete();
       
           
            return redirect()->back()->with('success', 'Product Deleted From Wishlist successfully!');
        
    }
     public function changepasswords(Request $request)
    {


       
      
            $data = $request->all();
            $adddresss = new Customer;
             if($user = Auth::user())
{ 
    $userid=$user->id;
     $useroldpassword=$user->password;

} ?><br> <?php
              $oldpassword =$data['oldpassword'];

             if (password_verify($oldpassword, $useroldpassword)) {
               

                 if ($data['newpassword']==$data['confrmpassword']) {
                  $passwordnew=bcrypt($data['newpassword']);

                     DB::table('users')
                ->where('id', $userid)
                ->update(['password' =>$passwordnew
               
                ]);


                
             }
                
             }

         
       
           
            return redirect()->back()->with('success', 'Password Changed successfully!');
        
    }


}
