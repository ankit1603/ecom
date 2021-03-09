<?php

namespace App\Http\Controllers;
use  App\Merchant;
use Illuminate\Http\Request;

class VendorCommisionController extends Controller
{
    //

    public function vendorCommision()
    {
        return view('admin/vendor/vendor_commission');
    }
    
    public function vendorlist()
    {
        $vendorist = Merchant::where('active',1)->get();

     return view('admin/vendor/vendor_list')->with(compact('vendorist'));
       
    }
     
    public static function vendorreq()
    {
        $vendorist = Merchant::where('active',0)->get();

  return view('admin/vendor/vendorreq')->with(compact('vendorist'));
    }
    public function deletevendor(Request $request,$id)
    {
        
       $vendorist = new Merchant;
        $vendorist = Merchant::where('id', '=', $id)->orderBy('id', 'asc')->get();
       

         $vendorist = new Merchant;
          $vendorist->where('id', '=', $id)->delete();
        $vendorist = Merchant::orderBy('shopname', 'asc')->get();

        return redirect('/admin/merchant/')->with('flash_message_success','Vendor Deleted Successfully');


       
    }
   
}
