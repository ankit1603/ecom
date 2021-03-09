<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Attributes;
use  App\Units;
class attributecontroller extends Controller 
{
    public function addAttributevariations(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
            $category = new Attributes;

            $category->name = $data['catname'];
           
            $category->status = $data['status'];
           

           

            $category->save();
            return redirect('/admin/variationparameters')->with('flash_message_success','Attribute Added Successfully');

        }

         $categorygroups = new Attributes;
        $categorygroups = Attributes::orderBy('name', 'asc')->get();

        return view('admin.variations.attributes',compact('categorygroups'));
    }

    public function addattributesunit(Request $request,$id){

        if($request->isMethod('post')){
            $data = $request->all();
            $category = new Units;

            $category->name = $data['catname'];
           
            $category->status = $data['status'];
           

           

            $category->save();
            return redirect('/admin/variationparameters/addunits/{id}')->with('flash_message_success','Units Added Successfully');

        }

         $categorygroups = new Units;
        $categorygroups = Units::where('attributesid', '=', $id)->orderBy('name', 'asc')->get();

        return view('admin.variations.addunits',compact('categorygroups'),compact('id'));
    }

     public function addattributesunits(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
            $category = new Units;
            $ids=$data['attributeid'];
             $category->attributesid = $data['attributeid'];

            $category->name = $data['catname'];
           
            $category->status = $data['status'];
           

           

            $category->save();
            return redirect('/admin/variationparameters/addunits/'.$category->attributesid)->with('flash_message_success','Units Added Successfully');

        }

         $categorygroups = new Units;
        $categorygroups = Attributes::orderBy('name', 'asc')->get();

        return view('admin.variations.addunits',compact('categorygroups'),compact('id'));
    }

    public function deleteattributesunit(Request $request,$id){

        $categorygroupsss = new Units;
        $categorygroupsss = Units::where('id', '=', $id)->orderBy('id', 'asc')->get();
       

         $categorygroups = new Units;
          $categorygroups->where('id', '=', $id)->delete();
        $categorygroups = Units::orderBy('name', 'asc')->get();

        return redirect('/admin/variationparameters/addunits/'.$categorygroupsss[0]->attributesid)->with('flash_message_success','Unit Deleted Successfully');

       
    }




     public function editattributesunits(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
            $category = new Units;
           echo $ids=$data['attributeid'];
            echo $id=$data['id'];die();
             $category->attributesid = $data['attributeid'];

            $category->name = $data['catname'];
            $category->status = $data['status'];
           

           

            $category->save();
            return redirect('/admin/variationparameters/addunits/'.$category->attributesid)->with('flash_message_success','Units Added Successfully');

        }

         $categorygroups = new Units;
        $categorygroups = Attributes::orderBy('name', 'asc')->get();

        return view('admin.variations.addunits',compact('categorygroups'),compact('id'));
    }

        public function deleteAttributevariations(Request $request,$id){

        $categorygroupsss = new Attributes;
        $categorygroupsss = Attributes::where('id', '=', $id)->orderBy('id', 'asc')->get();
       

         $categorygroups = new Attributes;
          $categorygroups->where('id', '=', $id)->delete();
        $categorygroups = Attributes::orderBy('name', 'asc')->get();

        return redirect('/admin/variationparameters'.$categorygroupsss[0]->attributesid)->with('flash_message_success','Attributes Deleted Successfully');

       
    }

}
