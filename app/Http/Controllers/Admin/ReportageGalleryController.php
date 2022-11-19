<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reportage;
use App\Models\Reportage_gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ReportageGalleryController extends Controller
{
    public function index($reportage_id)
    {
        $galleries = Reportage_gallery::where('reportage_id',$reportage_id)->get();
        return view('admin.reportage.gallery', compact('galleries','reportage_id'));
    }

    public function create($reportage_id)
    {
        return view('admin.reportage.gallery_create',compact('reportage_id'));
    }

    public function store(Request $request,$reportage_id)
    {

        $reportageGallery = new Reportage_gallery();
        $reportageGallery->reportage_id = $reportage_id;
        $reportageGallery->meta_data = $request->input('meta_data');

        if ($request->hasfile('image')){
            $file = $request->file('image');
            $filenameImage = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/reportage/'.$reportage_id.'/', $filenameImage);
            $reportageGallery->image = $filenameImage;
        }
        if ($request->hasfile('image_with_description')){
            $file = $request->file('image_with_description');
            $filenameImageDesc = time() . '_desc.' . $file->getClientOriginalExtension();
            $file->move('uploads/reportage/'.$reportage_id.'/', $filenameImageDesc);
            $reportageGallery->image_with_description = $filenameImageDesc;
        }

        $reportageGallery->save();

        return redirect('admin/reportage/'.$reportage_id.'/gallery')->with('message','Reportage gallery added Successfully');
    }

    public function edit($reportage_id,$gallery_id)
    {
        $gallery = Reportage_gallery::find($gallery_id);
        return view('admin.reportage.gallery_edit', compact('reportage_id','gallery'));
    }

    public function update(Request $request, $reportage_id,$gallery_id)
    {

        $reportageGallery = Reportage_gallery::find($gallery_id);
        $reportageGallery->reportage_id = $reportage_id;
        $reportageGallery->meta_data = $request->input('meta_data');

        if ($request->hasfile('image')){
            $destination = 'uploads/reportage/'.$reportage_id.'/'.$reportageGallery->image;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('image');
            $filenameImage = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/reportage/'.$reportage_id, $filenameImage);
            $reportageGallery->image = $filenameImage;
        }
        if ($request->hasfile('image_with_description')){
            $destination = 'uploads/reportage/'.$reportage_id.'/'.$reportageGallery->image_with_description;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('image_with_description');
            $filenameImageDesc = time() . '_desc.' . $file->getClientOriginalExtension();
            $file->move('uploads/reportage/'.$reportage_id, $filenameImageDesc);
            $reportageGallery->image_with_description = $filenameImageDesc;
        }
        $reportageGallery->update();

        return redirect('admin/reportage/'.$reportage_id.'/gallery')->with('message','gallery Updated Successfully');
    }

    public function destroy($reportage_id,$gallery_id)
    {
        $reportageGallery = Reportage_gallery::find($gallery_id);
        if($reportageGallery)
        {
            $destination = 'uploads/reportage/'.$reportage_id.'/'.$reportageGallery->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $destination = 'uploads/reportage/'.$reportage_id.'/'.$reportageGallery->image_with_description;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $reportageGallery->delete();
            return redirect('admin/reportage/'.$reportage_id.'/gallery')->with('message','gallery deleted Successfully');
        }
        else
        {
            return redirect('admin/reportage/'.$reportage_id.'/gallery')->with('message','No gallery Founded');
        }

    }
}
