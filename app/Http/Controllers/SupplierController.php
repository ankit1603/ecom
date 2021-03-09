<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Country;
use App\State;
use App\Supplier;
use Image;

class SupplierController extends Controller
{
    public function addSupplier(Request $request){

    	if($request->isMethod('post')){
    		$data = $request->all();
    		$supplier = new Supplier;

    		$supplier->name = $data['name'];
            $supplier->email = $data['email'];
    		$supplier->contact_person = $data['contactperson'];
    		$supplier->url  = $data['url'];
    		$supplier->phone = $data['phone'];
    		$supplier->address_line_1 = $data['address1'];
    		$supplier->address_line_2 = $data['address2'];
    		$supplier->city = $data['city'];
    		$supplier->zip_code = $data['zipcode'];
    		$supplier->state_id = $data['state'];
    		$supplier->country_id = $data['country'];
    		
    		$supplier->description = $data['description'];
    		$supplier->active = $data['status'];


            if($request->hasfile('brandlogo')){

               $img_tmp = $request->file('brandlogo');
               

                if($img_tmp->isValid()){
                //Image Path Code

                $extension = $img_tmp->GetClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $img_path = 'upload/supplier/brandlogo'.$filename;

                //Image Resize

                Image::make($img_tmp)->resize(300,300)->save($img_path);

                $supplier->brandlogo=$filename;

            }
            
            }

          

    		$supplier->save();
    		return redirect('/admin/stock/supplier')->with('flash_message_success','Category Added Successfully');

    	}


    	$country = new Country;

        $countries = Country::where('active','1')->pluck('name','id');
         $state = State::where('active','1')->pluck('name','id');
      
    	return view('admin.supplier.add_supplier',compact('countries','state'));


    }

      // public function getState($id){

      // 	$state = State::where('country_id',$id)->pluck('name','id');
      // 	return response()->json($states);


      // }



}
