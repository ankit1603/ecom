<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Auth;
use App\ProductOrder;


class CustomerController extends Controller
{
    //

    public function addCustomer(){

    	$country = new Customer;

    	$level = Customer::orderBy('name', 'asc')->get();

    	return view('admin.customer.customer', compact('level'));
    }

    public function viewcustomer(){
    	if($user = Auth::user())
            {
          $id = $user->user_id;
          $rollid=$user->roll_id;
         
            }
            if ($rollid==1) {
         $Customer = Customer::get();

        $orders=Customer::orderBy('id', 'asc')->get();

        return view('admin.customer.customer',compact('Customer','orders'));
    }
    else{
        $Customer = Customer::get();

        $orders=Customer::orderBy('id', 'asc')->get();

        return view('vendor.orderdetail',compact('Customer','orders'));
    }
    }
    
    
    public function viewcustomerdetail($orderid) {

  if (ProductOrder::where('id',$orderid)->exists()){
    $orders = ProductOrder::find($orderid);
    return view('admin/customer/customerdetail')->with( 'orders', $orders ); 
  }

  else {
    return redirect()->back()->with('status','No Order Found');
  }
  }
}
