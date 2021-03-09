<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Image;
use Input;
class SliderController extends Controller
{
    public function addslider(Request $request){
    	if($request->isMethod('post')){
    		$data = $request->all();
    		$slider = new Slider;
    		$slider->title = $data['title'];
    		$slider->text_style = $data['textstyle'];
    		$slider->content  = $data['content'];
    		$slider->link = $data['link'];
    		$slider->order = $data['sortorder'];
    		

             if($request->hasfile('image')){

               $img_tmp = $request->file('image');
               

                if($img_tmp->isValid()){
                //Image Path Code

                $extension = $img_tmp->GetClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $img_path = 'upload/slider/'.$filename;

                //Image Resize

                Image::make($img_tmp)->save($img_path);

                $slider->image=$filename;


                   }
            
            }
           
    		$slider->save();
    		return redirect('/admin/slider')->with('flash_message_success','Slider has been uploaded Successfully!!');

    	}
        $sliders = Slider::get();

    	return view('admin.slider.add_slider', compact('sliders'));
    }
}
