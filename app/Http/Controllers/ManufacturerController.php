<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Manufacturer\ManufacturerRepository;
use App\manufacturer;
use App\Country;
use Image;
use Auth;
use Session;
class ManufacturerController extends Controller
{
     private $model_name;

    private $manufacturer;

      /**
     * construct
     */
    public function __construct(ManufacturerRepository $manufacturer)
    {

        $this->manufacturer = $manufacturer;
    }


    public function addManufacturer(Request $request){
            
          

    	if($request->isMethod('post')){
    		$data = $request->all();
    		$manufacturer = new Manufacturer;

    		$manufacturer->name = $data['name'];
    		$manufacturer->active = $data['status'];
    		$manufacturer->url  = $data['url'];
    		$manufacturer->country_id = $data['country'];
    		$manufacturer->email = $data['email'];
    		$manufacturer->phone = $data['phone'];
    		$manufacturer->description = $data['test'];

            if($request->hasfile('brandlogo')){

               $img_tmp = $request->file('brandlogo');
               

                if($img_tmp->isValid()){
                //Image Path Code

                $extension = $img_tmp->GetClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $img_path = 'upload/manufacturer/brandlogo/'.$filename;

                //Image Resize

                Image::make($img_tmp)->resize(500,500)->save($img_path);

                $manufacturer->brandlogo=$filename;

            }
            
            }

          


    		$manufacturer->save();
    		return redirect('/admin/manufacturer')->with('flash_message_success','Manufacturer Added Successfully');

    	}
        $country = new Country;

        $country = Country::get();
        
        $manufacturers = $this->manufacturer->all();

    	return view('admin.manufacturer.create_manufacturer', compact('country','manufacturers'));

         if ($rollid==1) {
        $neworder = Manufacturer::where('active','1')->orderby('id','DESC')->get();
        return view('admin.manufacturer.create_manufacturer', compact('neworder'));
       }
      else{
        $neworder = Manufacturer::where('active','1')->orderby('id','DESC')->get();
        return view('vendor.manufacturer.create_manufacturer', compact('neworder'));
        }  
    }

     public function deletemanufacturer(Request $request,$id){

       $manufacturer = new Manufacturer;
        $manufacturer = Manufacturer::where('id', '=', $id)->orderBy('id', 'asc')->get();
       

         $manufacturer = new Manufacturer;
          $manufacturer->where('id', '=', $id)->delete();
        $manufacturer = Manufacturer::orderBy('name', 'asc')->get();

       return redirect('/admin/manufacturer/')->with('flash_message_success','Manufacturer Deleted Successfully');


     }
}
