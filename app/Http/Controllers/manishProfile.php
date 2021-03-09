<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Category;
use App\CategorySubGroup;
use App\MainCategory;
use Image;

class manishProfile extends Controller
{
     public function addmanish(Request $request)
    {

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
            return redirect('/admin/manishdetails')->with('flash_message_success','Category Added Successfully');


        }
        $categorygroup = new CategorySubGroup;
        $categorygroup = CategorySubGroup::orderBy('active', 'desc')->orderBy('name', 'asc')->get();
           $categorygroups = new MainCategory;
        $categorygroups = MainCategory::orderBy('active', 'desc')->orderBy('name', 'asc')->get();
      
       return view('admin.manish.create-manish', compact('categorygroup'),compact('categorygroups'));
      
        
    }

    public function editmanish(Request $request)
    {


        if($request->isMethod('post')){
            $data = $request->all();
            $id=$data['id'];
            $maincat = new MainCategory;
            $maincat=MainCategory::find($id);
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
            $maincat->update($data);

            $maincat->save();
            return redirect('/admin/manishdetails')->with('flash_message_success','Category Updated Successfully');


        }
      
      
        
    }

    public static function deleteData($id){
        echo $id;
        DB::table('categories')->where('id', '=', $id)->delete();
      return redirect('/admin/manishdetails')->with('flash_message_success','Category Deleted Successfully');
    
  }





}
