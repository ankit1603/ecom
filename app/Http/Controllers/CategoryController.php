<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Session;
use  App\Category;
class CategoryController extends Controller
{
    
    public function addCategory(Request $request){

        if($user = Auth::user())
            {
          $id = $user->user_id;
          $rollid=$user->roll_id;
         
            }
    	if($request->isMethod('post')){
    		$data = $request->all();
    		$category = new Category;

    		$category->name = $data['catname'];
    		$category->slug = $data['slug'];
    		$category->description = $data['description'];
    		$category->icon = $rollid;
    		$category->active = $data['status'];
    		$category->order = $data['order'];
    		$category->meta_title = $data['metatitle'];
    		$category->meta_description = $data['metadescription'];
    		$category->save();



    		return redirect('/admin/add-category')->with('flash_message_success','Category Added Successfully');
    	}
		
        if ($rollid==1) {
        $neworder = Category::where('active','1')->orderby('id','DESC')->get();
		return view('admin.category.categoryGroup', compact('neworder'));
       }
      else{
        $neworder = Category::where('active','1')->orderby('id','DESC')->get();
    	return view('vendor.category.categoryGroup', compact('neworder'));
        }  

    }

    public function deletecategory(Request $request,$id){

       $category = new Category;
        $category = Category::where('id', '=', $id)->orderBy('id', 'asc')->get();
       

         $category = new Category;
          $category->where('id', '=', $id)->delete();
        $category = Category::orderBy('name', 'asc')->get();

        return redirect('/admin/add-category/')->with('flash_message_success','Product Deleted Successfully');
     }
  
  public function editcategory( Request $request,$id){
    $category = Category::find($id);
    return view('admin.editcategory', ['category'=>$category]);
}

   
public function saveEdit(Request $request, $id){
    $category = Category::find($id);
             $category->save();
    return redirect('/admin/add-category/')->with('flash_message_success','Product Deleted Successfully');
}


 } 
  
    

 