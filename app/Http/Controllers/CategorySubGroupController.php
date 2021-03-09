<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Category;
use App\CategorySubGroup;
class CategorySubGroupController extends Controller
{
    //
    public function addsubCategory(Request $request){
 if($user = Auth::user())
            {
          $id = $user->user_id;
          $rollid=$user->roll_id;
         
            }

    	if($request->isMethod('post')){
    		$data = $request->all();
    		$categorygroup = new CategorySubGroup;

    		$categorygroup->category_group_id = $data['catgroupname'];
    		$categorygroup->name = $data['catname'];
    		$categorygroup->slug  = $data['slug'];
    		$categorygroup->description = $data['description'];
    		$categorygroup->active = $data['status'];
    		$categorygroup->order = $data['order'];
    		$categorygroup->meta_title = $data['metatitle'];
    		$categorygroup->meta_description = $data['metadescription'];

    		$categorygroup->save();
    		return redirect('/admin/add-subCategory')->with('flash_message_success','Category Added Successfully');



    	}
if ($rollid==1) {
    	$category = new CategorySubGroup;

    	$categorys = CategorySubGroup::orderBy('active', 'desc')->orderBy('name', 'asc')->get();
         $neworder = Category::where('active','1')->orderby('id','DESC')->get();
    	  return view('admin.category.categorySubGroup', compact('categorys','neworder'));
    	
        }
        else{
$category = new CategorySubGroup;

        $categorys = CategorySubGroup::orderBy('active', 'desc')->orderBy('name', 'asc')->get();
         $neworder = Category::where('active','1')->orderby('id','DESC')->get();
          return view('vendor.category.categorySubGroup', compact('categorys','neworder'));
        }
    }

    public function deletesubcategory(Request $request,$id){

       $category = new CategorySubGroup;
        $category = CategorySubGroup::where('id', '=', $id)->orderBy('id', 'asc')->get();
       

         $category = new CategorySubGroup;
          $category->where('id', '=', $id)->delete();
        $category = CategorySubGroup::orderBy('name', 'asc')->get();

        return redirect('/admin/add-subCategory/')->with('flash_message_success','Product Deleted Successfully');
     }
     public function editsubcategory(Request $request,$id)
    {
       
        $category = CategorySubGroup::find($id);
         return view('admin.add-subCategory', ['category'=>$cat]);
}

public function deletemaincategory(Request $request,$id){

       $category = new CategorySubGroup;
        $category = Category::where('id', '=', $id)->orderBy('id', 'asc')->get();
       

         $category = new CategorySubGroup;
          $category->where('id', '=', $id)->delete();
        $category = CategorySubGroup::orderBy('name', 'asc')->get();

        return redirect('/admin/add-mainCategory/')->with('flash_message_success','Product Deleted Successfully');
     }
     public function editmaincategory(Request $request,$id)
    {
       
        $products = CategorySubGroup::find($id);
         return view('admin.add-mainCategory', ['category'=>$cat]);
}

   
}
