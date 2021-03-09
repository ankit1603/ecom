<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Merchant;
use App\User;
use Image;
use  App\ProductOrder;
use  App\CustomerOrder;
use  App\Products;
use  App\coupan;
use Auth;

class MerchantController extends Controller
{
   public function addvendor(Request $request){

   	if($request->isMethod('post')){
    		$data = $request->all();
    		$merchant = new Merchant;
    		$merchant->name = $data['name'];
            $merchant->owner_id = 9;
            
    		$merchant->legal_name = $data['legalname'];
    		$merchant->slug = $data['slug'];
    		$merchant->email = $data['email'];
        $merchant->password = $data['password'];
        $merchant->shopname = $data['shopname'];

    		$merchant->description = $data['description'];
    		$merchant->external_url = $data['externalurl'];
    		$merchant->active = $data['status'];
    		

              if($request->hasfile('image')){

               $img_tmp = $request->file('image');
               

                if($img_tmp->isValid()){
                //Image Path Code

                $extension = $img_tmp->GetClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $img_path = 'upload/Logo/'.$filename;

                //Image Resize

                Image::make($img_tmp)->resize(100,100)->save($img_path);

                $merchant->image=$filename;

            }
            
            }

    
            //$merchant->meta_title = $data['metatitle'];
            //$merchant->meta_description = $data['description'];

    		$merchant->save();
        $lastinsertid=$merchant->id;


                $User = new User;
                $User->name = $data['name'];
                $User->user_id = $lastinsertid;
                 $User->email  = $data['email'];
                    $User->password  = bcrypt($data['password']);
                      $User->roll_id  = 3;
                      $User->save();
          
   
          

    		return redirect('/admin/merchant')->with('flash_message_success','Added New Vendor Successfully');
    	}



     $vendorists = Merchant::where('active',1)->get();


   	return view('admin.vendor.create_vendor')->with(compact('vendorists'));
   }


    public function DirectDownline(Request $request){

         if($user = Auth::user())
            {
          $id = $user->user_id;
           $rollid=$user->roll_id;
         
            }
         $member = member::where('id',$id)->get();  
          $memberid=$member[0]->m_id;

        $memberList = member::where('sponsor_id',$memberid)->get();

         $Products = Products::get();

        $categorydetails=MainCategory::orderBy('id', 'asc')->get();

         if ($rollid==1) {
             return view('admin.member.direct_downline',compact('memberList','Products','categorydetails'));
        }
        else{
             return view('members.direct_downline',compact('memberList','Products','categorydetails'));
        }

       
    }

   

   public function productorder(){
    if($user = Auth::user())
            {
          $id = $user->user_id;
           $rollid=$user->roll_id;
         
            }
  $neworder = ProductOrder::where('status','1')->orderby('id','DESC')->get();

  if ($rollid==1) {
    return view('admin.productdelstatus')->with(compact('neworder'));
   }
   else {
    return view('vendor.productdelstatus')->with(compact('neworder'));
   }
 }

   public function pendingtomer(){
    if($user = Auth::user()){
                $id = $user->user_id;
                 $rollid=$user->roll_id; }
              $neworder = ProductOrder::where('status','2')->orderby('id','DESC')->get();

              if ($rollid==1) {
    return view('admin.pendingv')->with(compact('neworder'));
       }
       else {
        return view('vendor.pendingv')->with(compact('neworder'));
       }
     }

        public function deliverys(){
        if($user = Auth::user()){
                $id = $user->user_id;
                 $rollid=$user->roll_id; }
              $neworder = ProductOrder::where('status','3')->orderby('id','DESC')->get();

              if ($rollid==1) {
                return view('admin.deliverys')->with(compact('neworder'));
            }
              else {
                return view('vendor.deliverys')->with(compact('neworder'));
              }
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


public function cancelled(){
  if($user = Auth::user())
            {
          $id = $user->user_id;
           $rollid=$user->roll_id;
         
            }
  $neworder = ProductOrder::where('status','5')->orderby('id','DESC')->get();

  if ($rollid==1) {
  return view('admin.cancelled')->with(compact('neworder'));
}
 else {
     return view('vendor.cancelled')->with(compact('neworder'));
 }
}

public function returnreq(){
  if($user = Auth::user())
            {
          $id = $user->user_id;
           $rollid=$user->roll_id;
         
            }
  $neworder = ProductOrder::where('status','6')->orderby('id','DESC')->get();

  if ($rollid==1) {
  return view('admin.returnreq')->with(compact('neworder'));
}
  else {
    return view('vendor.returnreq')->with(compact('neworder'));
  }
}

public function coupanm(){
  $neworder = coupan::where('status','1')->orderby('id','DESC')->get();
  return view('admin.coupanm')->with(compact('neworder'));
}
public static function orderdetail($id){
    $orderdetail = CustomerOrder::where('id',$id)->get();
  
  return $orderdetail;
  }

  public static function productdetail($product_id){
    $productdetail = Products::where('id',$product_id)->get();
  
  return $productdetail;
  }
  public static function shopdetail($shop_id){
    $shopdetail = Merchant::where('id',$shop_id)->get();
  
  return $shopdetail;
  }

   public static function index(Request $request){
      $orders = ProductOrder::all();
        return view('vendor/order')->with( 'orders', $orders ); 
      }
}
