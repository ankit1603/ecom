<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\coupan;


class CouponsController extends Controller
{
     public function addcoupons(Request $request)
    {
        

        if($request->isMethod('post')){
            $data = $request->all();

            $ordertab = new coupan;
            $ordertab->couponname = $data['couponname'];
            
            $ordertab->coupancode = $data['couponcode'];
            $ordertab->status  = $data['status'];
            $ordertab->offer = $data['offer'];
            $ordertab->startdate = $data['startdate'];
            $ordertab->enddate = $data['enddate'];
            $ordertab->valid = $data['createdate'];
            $ordertab->save();
            return redirect('/admin/coupanm')->with('flash_message_success','Coupon Added Successfully');
    }
}

  public function deletecoupon(Request $request,$id){

       $ordertab = new coupan;
        $ordertab = coupan::where('id', '=', $id)->orderBy('id', 'asc')->get();
       

         $ordertab = new coupan;
          $ordertab->where('id', '=', $id)->delete();
        $ordertab = coupan::orderBy('couponname', 'asc')->get();

        return redirect('/admin/coupanm/'.$ordertab[0]->product_id)->with('flash_message_success','Product Deleted Successfully');


     }

     public function editcoupon(Request $request,$id)
    {
       
        $products = coupan::find($id);
         return view('admin.coupanm', ['ordertab'=>$ordertab]);
}
}