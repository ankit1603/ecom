<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Input;
use App\Category;
use App\CategorySubGroup;
use App\MainCategory;
use Image;
class MainCategoryController extends Controller
{
    
    public function addmainCategory(Request $request){
        if($user = Auth::user())
            {
          $id = $user->user_id;
          $rollid=$user->roll_id;
         
            }
    	if($request->isMethod('post')){
    		$data = $request->all();
    		$maincat = new MainCategory;
    		$maincat->category_sub_group_id = $data['subgroup'];
    		$maincat->name = $data['catname'];
    		$maincat->slug  = $data['slug'];
    		$maincat->description = $data['description'];
    		$maincat->active = $data['status'];
    		

             if($request->hasfile('image')){

               $img_tmp = $request->file('image');
               

                if($img_tmp->isValid()){
                //Image Path Code

                $extension = $img_tmp->GetClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $img_path = 'upload/categoryImage/'.$filename;

                //Image Resize

                Image::make($img_tmp)->resize(500,500)->save($img_path);

                $maincat->image=$filename;

            }

            }
            $maincat->order = $data['order'];
            $maincat->meta_title = $data['metatitle'];
            $maincat->meta_description = $data['metadescription'];

    		$maincat->save();
    		return redirect('/admin/add-mainCategory')->with('flash_message_success','Category Added Successfully');


    	}
if ($rollid==1) {
    	$categorygroup = new CategorySubGroup;
    	$categorygroup = CategorySubGroup::orderBy('active', 'desc')->orderBy('name', 'asc')->get();
        
    	return view('admin.category.category', compact('categorygroup'));
    }
    else{
        $categorygroup = new CategorySubGroup;
        $categorygroup = CategorySubGroup::orderBy('active', 'desc')->orderBy('name', 'asc')->get();
        
        return view('vendor.category.category', compact('categorygroup'));
    }
    }
}
