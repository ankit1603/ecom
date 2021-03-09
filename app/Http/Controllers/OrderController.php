<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use  App\Order;



class OrderController extends Controller
{
     public function index(Request $request){
     	$orders = Order::all();
        return view('vendor/order')->with( 'orders', $orders );
     }


     public function orderdetail(Request $request){
     	if($user = Auth::user())
            {
          $id = $user->user_id;
          $rollid=$user->roll_id;
         
            }
        
        if($request->isMethod('post')){
    		$data = $request->all();
    		$category = new Order;

    		$category->name = $data['catname'];
    		$category->slug = $data['slug'];
    		$category->description = $data['description'];
    		$category->icon = $rollid;
    		$category->active = $data['status'];
    		$category->order = $data['order'];
    		$category->meta_title = $data['metatitle'];
    		$category->meta_description = $data['metadescription'];
    		$category->save();



    		return redirect('/vendor/order')->with('flash_message_success','Order Added Successfully');
    	}
		
        if ($rollid==1) {
        $neworder = Order::where('status','1')->orderby('id','DESC')->get();
		return view('admin.order.orderdetail', compact('neworder'));
       }
      else{
        $neworder = Order::where('status','1')->orderby('id','DESC')->get();
    	return view('vendor.order.orderdetail', compact('neworder'));
        }  

    }
    public static function Orders($id){
             $orderdetail = Order::where('id',$id)->get();
              return $orderdetail;
         }
    public static function productcost($id){
    $productcost = Order::where('id',$id)->get();
  
  return $productcost;
  }
  
  public function delivered(){
   if($user = Auth::user())
            {
          $id = $user->user_id;
           $rollid=$user->roll_id;
         
            }
  $neworder = ProductOrder::where('status','4')->orderby('id','DESC')->get();

  if ($rollid==1) {
             return view('admin.delivered')->with(compact('neworder'));
        }
        else{
              return view('vendor.delivered')->with(compact('neworder'));
        }

  
}
}