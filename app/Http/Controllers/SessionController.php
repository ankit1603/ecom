<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use  App\Addtocart;
use  App\wishlist;
use Auth;
use DB;


class SessionController extends Controller
{
    public static function accessSessionData(Request $request) {
      if($request->session()->has('user')){
         echo $request->session()->get('user');die();
      }
      else
         echo 'No data in the session';
   }


   public function storeSessionData(Request $request,$id) {


   	$product = Products::find($id);
        if(!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->max_price,
                        "photo" => $product->image
                    ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->max_price,
            "photo" => $product->image
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

       public function storeSessionDatas(Request $request,$id) {


   	$product = Products::find($id);
        if(!$product) {
            abort(404);
        }
       
         if($user = Auth::user())
            {
             $userid = $user->id;
            }
        $subcategory = Addtocart::where('status','1')->where('userid',$userid)->where('productid',$id)->get();
         $sizeofcat=sizeof($subcategory);
        


        // if cart not empty then check if this product exist then increment quantity
        if ($sizeofcat>0) {

        	$prevquant=$subcategory[0]->quantity;
        	$nowquantity=$prevquant+1;
        	$Atcid=$subcategory[0]->id;
        	
           
             DB::table('add_to_cart')
                ->where('id', $Atcid)
                ->update(['quantity' =>$nowquantity
               
                ]);
              return redirect()->back()->with('success', 'Product added to cart successfully!');
           
        }
       

           $category = new Addtocart;
            if($user = Auth::user())
           {    
            $category->userid = $user->id;
           }
           
            $category->productid = $id;
             $category->name = $product->name;

            $category->quantity = 1;
           
            $category->image =$product->image;
             $category->status = 1;
              $category->price = $product->max_price;
           
            $category->save();
             return redirect()->back()->with('success', 'Product added to cart successfully!');
        
      
    }

    public function storewish(Request $request,$id) {

      
 
       
         if($user = Auth::user())
            {
             $userid = $user->id;
            }
       

           $category = new wishlist;
            if($user = Auth::user())
           {    
            $category->userid = $user->id;
           }
           
            $category->product_id = $id;
           
           
            $category->save();
             return redirect()->back()->with('success', 'Product added to wish list successfully!');
        
      
    }
  
   public function deleteSessionData(Request $request) {
      $request->session()->forget('my_name');
      echo "Data has been removed from session.";

      
   }

}
