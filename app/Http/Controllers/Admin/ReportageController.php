<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ReportageFormRequest;
use App\Models\Reportage;
use Illuminate\Support\Facades\File;

class ReportageController extends Controller
{
    public function index()
    {
        $reportages = Reportage::orderBy('year','asc')->get();
        return view('admin.reportage.index', compact('reportages'));
    }

    public function create()
    {
        return view('admin.reportage.create');
    }

    public function store(ReportageFormRequest $request)
    {
        $data = $request->validated();

        $reportage = new Reportage();
        $name = ['en'=>$data['name']['en'],'al'=>$data['name']['al']];
        $description = ['en'=>$data['description']['en'],'al'=>$data['description']['al']];
        $reportage -> year = $data['year'];
        $reportage -> name = $name;
        $reportage -> description = $description;

        if ($request->hasfile('image')){
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/reportage/', $filename);
            $reportage->image = $filename;
        }

        $reportage -> save();

        return redirect('admin/reportage')->with('message','Reportage added Successfully');
    }

    public function edit($reportage_id)
    {
        $reportage = Reportage::find($reportage_id);
        return view('admin.reportage.edit', compact('reportage'));
    }

    public function update(ReportageFormRequest $request, $reportage_id)
    {
        $data = $request->validated();

        $reportage = Reportage::find($reportage_id);
        $name = ['en'=>$data['name']['en'],'al'=>$data['name']['al']];
        $description = ['en'=>$data['description']['en'],'al'=>$data['description']['al']];
        $reportage -> year = $data['year'];
        $reportage -> name = $name;
        $reportage -> description = $description;

        if ($request->hasfile('image')){

            $destination = 'uploads/reportage/'.$reportage->image;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/reportage/', $filename);
            $reportage->image = $filename;
        }

        $reportage -> update();

        return redirect('admin/reportage')->with('message','Reportage Updated Successfully');
    }

    public function destroy($category_id)
    {
        $reportage = Reportage::find($category_id);
        if($reportage)
        {
            $destination = 'uploads/reportage/'.$reportage->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $reportage->delete();
            return redirect('admin/reportage')->with('message','Reportage deleted Successfully');
        }
        else
        {
            return redirect('admin/reportage')->with('message','No Reportage Founded');
        }

    }
}
