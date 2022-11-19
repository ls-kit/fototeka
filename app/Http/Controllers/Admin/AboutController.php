<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutFormRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::all();
        return view('admin.about.index', compact('about'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store (AboutFormRequest $request)
    {
        $data = $request->validated();
        $about = new About;
        $about->description = $data['description'];
        $about->save();

        return redirect('admin/about')->with('message','Content Added Successfully');
    }

    public function edit($about_id)
    {
        $about = About::find($about_id);
        return view('admin.about.edit',compact('about'));
    }

    public function update(AboutFormRequest $request, $about_id)
    {
        $data = $request->validated();
        $about = About::find($about_id);
        $about->description = $data['description'];

        $about->update();

        return redirect('admin/about')->with('message','Content Updated Successfully');
    }

    public function destroy($about_id)
    {
        $about = About::find($about_id);
        $about->delete();
        return redirect('admin/about')->with('message','Content Deleted Successfully');
    }
}
