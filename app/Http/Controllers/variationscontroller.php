<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Attributes;
use  App\Units;
use  App\MainCategory;
use  App\Variationscategories;
use  App\Variations;
use  App\Variationsvalues;

class variationscontroller extends Controller
{
    public function addvariations(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
             $categ=$data['category'];
             $categsize= sizeof($categ);
            
            $category = new Variations;

            $category->name = $data['catname'];
           
            $category->status = $data['status'];
             $category->types = $data['type'];
           
            $category->save();
            $lastid=$category->id;
            for ($i=0; $i <$categsize ; $i++) { 
                 $categoryvariations = new Variationscategories;
                  $categoryvariations->variationsid = $lastid;
           
                  $categoryvariations->categoryid = $categ[$i];
                  $categoryvariations->save();
               
            }

            return redirect('/admin/addvariation')->with('flash_message_success','Variations Added Successfully');

        }

         $categorygroups = new Attributes;
        $categorygroups = Attributes::orderBy('name', 'asc')->get();
          $categorygroupss = new MainCategory;
        $categorygroupss = MainCategory::orderBy('name', 'asc')->get();
         $categorygroupsss = new Variations;
        $categorygroupsss = Variations::orderBy('name', 'asc')->get();
         $categorygroupssss = new Variationscategories;
        $categorygroupssss = Variationscategories::orderBy('variationsid', 'asc')->get();

return view('admin.variations.addvariations',compact('categorygroups','categorygroupss','categorygroupsss','categorygroupssss'));
    }

    public function deletevariationss(Request $request,$id){

       

         $categorygroups = new Variations;
          $categorygroups->where('id', '=', $id)->delete();
       

         $categorygroups = new Attributes;
        $categorygroups = Attributes::orderBy('name', 'asc')->get();
          $categorygroupss = new MainCategory;
        $categorygroupss = MainCategory::orderBy('name', 'asc')->get();
         $categorygroupsss = new Variations;
        $categorygroupsss = Variations::orderBy('name', 'asc')->get();
         $categorygroupssss = new Variationscategories;
        $categorygroupssss = Variationscategories::orderBy('variationsid', 'asc')->get();

return view('admin.variations.addvariations',compact('categorygroups','categorygroupss','categorygroupsss','categorygroupssss'));
    }

  public function addvariationvalues(Request $request,$id){

        if($request->isMethod('post')){
            $data = $request->all();
            $category = new Units;

            $category->name = $data['catname'];
           
            $category->status = $data['status'];
           

           

            $category->save();
            return redirect('/admin/variations/addvalues/{id}')->with('flash_message_success','Values Added Successfully');

        }

        $categorygroupss = new Variations;
        $categorygroupss = Variations::where('id', '=', $id)->orderBy('name', 'asc')->get();

         $categorygroups = new Units;
        $categorygroups = Units::orderBy('name', 'asc')->get();

         $categorygroupsss = new Variationsvalues;
        $categorygroupsss = Variationsvalues::where('variationsid', '=', $id)->orderBy('id', 'asc')->get();

        return view('admin.variations.addvalues',compact('categorygroups','id','categorygroupss','categorygroupsss'));
    }

      public function addvariatonsvaluess(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
            $category = new Variationsvalues;
            $ids=$data['variationsid'];
             $category->variationsid = $data['variationsid'];
                $category->values = $data['value'];

            $category->unitid = $data['units'];
           
            $category->status = $data['status'];
           

           

            $category->save();
            return redirect('/admin/variations/addvalues/'.$category->variationsid)->with('flash_message_success','Values Added Successfully');

        }

         $categorygroups = new Units;
        $categorygroups = Attributes::orderBy('name', 'asc')->get();

        return view('admin.variations.addunits',compact('categorygroups'),compact('id'));
    }

     public function deletevariationsvalues(Request $request,$id){
       $categorygroupsss = new Variationsvalues;
        $categorygroupsss = Variationsvalues::where('id', '=', $id)->orderBy('id', 'asc')->get();
         
      
         $categorygroups = new Variationsvalues;
          $categorygroups->where('id', '=', $id)->delete();

           return redirect('/admin/variations/addvalues/'.$categorygroupsss[0]->variationsid)->with('flash_message_success','Value Deleted Successfully');

       
    }


     public function editvariationsvalues(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
            $category = new Units;
           echo $ids=$data['variationsid'];
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





}
