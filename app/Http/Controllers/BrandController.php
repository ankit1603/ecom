<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Session;
use App\Brand;
use Image;
class BrandController extends Controller
{
    public function addbrand(Request $request){
        if($user = Auth::user())
            {
          $id = $user->user_id;
          $rollid=$user->roll_id;
         
            }

    	if($request->isMethod('post')){
    		$data = $request->all();
    		$brand = new Brand;
    		$brand->name = $data['brandname'];
    		$brand->active = $data['status'];
    

              if($request->hasfile('image')){

               $img_tmp = $request->file('image');
               

                if($img_tmp->isValid()){
                //Image Path Code

                $extension = $img_tmp->GetClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $img_path = 'upload/Logo/'.$filename;

                //Image Resize

                Image::make($img_tmp)->resize(100,100)->save($img_path);

                $brand->image=$filename;

            }
            
            }
            $brand->meta_title = $data['metatitle'];
            $brand->meta_description = $data['description'];
    		$brand->save();
    		return redirect('/admin/brand')->with('flash_message_success','Brand Added Successfully');
    	}
        if ($rollid==1) {
        $neworder = Brand::where('active','1')->orderby('id','DESC')->get();
        return view('admin.brand.create_brand', compact('neworder'));
       }
      else{
        $neworder = Brand::where('active','1')->orderby('id','DESC')->get();
        return view('admin.brand', compact('neworder'));
        }  
    	
    }

    public function deletebrand(Request $request,$id){

       $brand = new Brand;
        $brand = Brand::where('id', '=', $id)->orderBy('id', 'asc')->get();
       

         $category = new Brand;
          $category->where('id', '=', $id)->delete();
        $brand = Brand::orderBy('name', 'asc')->get();

        return redirect('/admin/brand/')->with('flash_message_success','Product Deleted Successfully');
     }
     public function editbrand(Request $request,$id)
    {
       
        $products = Brand::find($id);
         return view('admin.brand', ['category'=>$cat]);
}

    
}
