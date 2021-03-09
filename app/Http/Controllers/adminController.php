<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use App\User;
use App\pages;
use  App\Addtocart;
use  App\CustomerOrder;
use  App\Customer;
use  App\ProductOrder;
use  App\Products;
use PDF;

class adminController extends Controller

{
    //
    public function login(Request $request){
          
    	if($request->isMethod('post')){



    		$data = $request->input();
    		if(Auth::attempt(['email'=>$data['username'],'password'=>$data['password']])){
  //echo "string"; die();
            $categorygroupsss = User::where('email', '=', $data['username'])->orderBy('id', 'asc')->get();
         

            if (($categorygroupsss[0]->roll_id)==1) {

                return redirect('admin/dashboard');
              
            }
          
            if (($categorygroupsss[0]->roll_id)==3) {


                return redirect('vendor/dashboard');
              
            }

              if (($categorygroupsss[0]->roll_id)==5) {

              

                return redirect('member/dashboard');
              
            }

             if (($categorygroupsss[0]->roll_id)==4) {
                $cart = session()->get('cart');
             

                if ($cart) {
                     
            foreach(session('cart')as $id => $details)
             {

                 if($user = Auth::user())
            {
             $userid = $user->id;
            }
        $subcategory = Addtocart::where('status','1')->where('userid',$userid)->where('productid',$id)->get();

         $sizeofcat=sizeof($subcategory);

            if ($sizeofcat>0) {

            $prevquant=$subcategory[0]->quantity;
            $nowquantity=$prevquant+1;
            $Atcid=$subcategory[0]->id;
             DB::table('add_to_cart')
                ->where('id', $Atcid)
                ->update(['quantity' =>$nowquantity
               
                ]);
           
          
           
           
            }
            else{

                $category = new Addtocart;
            if($user = Auth::user())
            { 
            $category->userid = $user->id;
            }
           
            $category->productid = $id;
             $category->name = $details['name'];

            $category->quantity = $details['quantity'];
           
            $category->image = $details['photo'];
             $category->status = 1;
              $category->price = $details['price'];
           
            $category->save();  }  } } 

              return redirect()->back()->with('success', 'Login successfully!');
              
            }


    			
    		}
    		else{
    			return redirect('/admin')->with('flash_message_error','Invalid Username or password');
    		}
    	}



    	return view('admin.admin_login');

    }


    public static function sidepages() {


        $pages = pages::where('status','1')->get();

return $pages;
}



public static function orders() {


    return view('admin.order');
}



        public function logins(Request $request){
          
        if($request->isMethod('post')){

            $data = $request->input();
            if(Auth::attempt(['email'=>$data['username'],'password'=>$data['password']])){

            $categorygroupsss = User::where('email', '=', $data['username'])->orderBy('id', 'asc')->get();
         

            if (($categorygroupsss[0]->roll_id)==1) {

                return redirect('admin/dashboard');
              
            }
            if (($categorygroupsss[0]->roll_id)==3) {

                return redirect('vendor/dashboard');
              
            }
             if (($categorygroupsss[0]->roll_id)==4 || ($categorygroupsss[0]->roll_id)==5) {
                $cart = session()->get('cart');
             

                if ($cart) {
                     
            foreach(session('cart')as $id => $details)
             {

                 if($user = Auth::user())
            {
             $userid = $user->id;
            }
        $subcategory = Addtocart::where('status','1')->where('userid',$userid)->where('productid',$id)->get();

         $sizeofcat=sizeof($subcategory);

            if ($sizeofcat>0) {

            $prevquant=$subcategory[0]->quantity;
            $nowquantity=$prevquant+1;
            $Atcid=$subcategory[0]->id;
             DB::table('add_to_cart')
                ->where('id', $Atcid)
                ->update(['quantity' =>$nowquantity
               
                ]);
           
          
            }
            else{

                $category = new Addtocart;
            if($user = Auth::user())
            { 
            $category->userid = $user->id;
            }
           
            $category->productid = $id;
             $category->name = $details['name'];

            $category->quantity = $details['quantity'];
           
            $category->image = $details['photo'];
             $category->status = 1;
              $category->price = $details['price'];
           
            $category->save();  }  } } 

              return redirect()->back()->with('success', 'Login successfully!');
              
            }
             }
            else{
                  return redirect()->back()->with('flash_message_error', 'Invalid Username or password');
               
            }
        }
    return view('admin.admin_login');

    }

    public function dashboard(){

    	return view('admin.dashboard');
    }
      public function vendordashboard(){

        return view('vendor.vendordashboard');
    }


    public function selectpage($id){

        $subpages = pages::where('id',$id)->get();
        return view('admin.pagesc')->with(compact('subpages'));

    }

    public function updatepa(Request $request){
        $this->validate($request, [
            'content' => 'required',
        ]);
        $id=$request->nameid;
        $content=$request->content;
        DB::update('update pages set content=? where id=?',[$content,$id]);
        $subpages = pages::where('id',$id)->get();
        return view('admin.pagesc')->with(compact('subpages'));

    }


    public function logout(){

        Session::flush();
        return redirect('/admin')->with('flash_message_success','You are Loged Out Successfully!');
    }


     public function logouts(){

        Session::flush();
        return redirect()->back()->with('success', 'Product deleted from cart successfully!');
    }

    public function ordertable(){
      if($user = Auth::user())
            {
          $id = $user->user_id;
           $rollid=$user->roll_id;
         
            }
    $neworder = CustomerOrder::where('order_status','1')->orderby('id','DESC')->get();

  if ($rollid==1) {
        
        return view('admin.order')->with(compact('neworder'));
    }
  else {
    return view('vendor.order')->with(compact('neworder'));
  }
}

    public static function Customers($id){
             $customerdet = Customer::where('id',$id)->get();
              return $customerdet;
         }
  
         public static function order(){
          if($user = Auth::user())
            {
          $id = $user->user_id;
           $rollid=$user->roll_id;
         
            }
             
             if ($rollid==1) {
                $orders = ProductOrder::all();
              return view('admin/order')->with( 'orders', $orders ); 
         }
         else {
          $orders = ProductOrder::all();
            return view('vendor/order')->with( 'orders', $orders ); 
         }
       }

         
       
public static function orderdetail(){
    $orders = ProductOrder::all();
  
  return view('vendor/orderdetail')->with( 'orders', $orders ); 
  }
 
 
 public static function vieworderdetail(){
    if($user = Auth::user())
            {
          $id = $user->user_id;
          $rollid=$user->roll_id;
         
            }
            if ($rollid==1) {
         $ProductOrder = ProductOrder::get();

        $order=Products::orderBy('id', 'asc')->get();

        return view('admin.products.view_products',compact('ProductOrder','order'));
    }
    else{
        $ProductOrder = ProductOrder::get();

        $order=Products::orderBy('id', 'asc')->get();

        return view('vendor.orderdetail',compact('ProductOrder','order'));
    }
    }

public static function productost($id){
    $productost = ProductOrder::where('orderid',$id)->get();
  
  return $productost;
  }


   public function memberdashboard(){

  return view('members.memberdashboard');

    }

  
  public static function productname($id){
    $productname = Products::where('id',$id)->get();
  
  return $productname;
  }

public function invoice($orderid) {

  if (ProductOrder::where('id',$orderid)->exists()){
    $orders = ProductOrder::find($orderid);
    return view('vendor.invoice')->with(compact('orders'));
    /*$data = [
            'orders' => $orders,
        ];
        $pdf = PDF::loadView('vendor.invoice', $data);
       return $pdf->download('ishop.pdf');*/
  }

  else {
    return redirect()->back()->with('status','No Order Found');
  }
  }

  

}
