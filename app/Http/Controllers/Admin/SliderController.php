<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SliderFormRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        return view('admin.slider.index',compact('slider'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(SliderFormRequest $request)
    {
        $data = $request->validated();
        $slider = new Slider;
        $slider->name = $data['name'];
        $slider->last_name = $data['last_name'];
        if ($request->hasfile('image')){
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/slider/', $filename);
            $slider->image = $filename;
        }
        if ($request->hasfile('mobile_image')){
            $file = $request->file('mobile_image');
            $m_filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/slider/mobile/', $m_filename);
            $slider->mobile_image = $m_filename;
        }
        $slider->save();

        return redirect('admin/slider')->with('message','Slider Image Added successfully');
    }

    public function destroy($slider_id)
    {
        $slider = Slider::find($slider_id);
        if($slider)
        {
            $destination = 'uploads/slider/'.$slider->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $destination_m = 'uploads/slider/mobile/'.$slider->mobile_image;
            if(File::exists($destination_m)){
                File::delete($destination_m);
            }
            $slider->delete();
            return redirect('admin/slider')->with('message','Image is deleted successfully from the slider');
        }
        else
            {
                return redirect('admin/slider')->with('message','No image Found');

        }

    }
}
