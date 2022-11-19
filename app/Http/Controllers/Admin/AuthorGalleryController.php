<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AuthorGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AuthorGalleryController extends Controller
{
    public function index($author_id)
    {
        $galleries = AuthorGallery::where('author_id',$author_id)->get();
        return view('admin.author.gallery', compact('galleries','author_id'));
    }

    public function create($author_id)
    {
        return view('admin.author.gallery_create',compact('author_id'));
    }

    public function store(Request $request,$author_id)
    {

        $authorGallery = new AuthorGallery();
        $authorGallery->author_id = $author_id;
        $authorGallery->meta_data = $request->input('meta_data');

        if ($request->hasfile('image')){
            $file = $request->file('image');
            $filenameImage = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/author/'.$author_id.'/', $filenameImage);
            $authorGallery->image = $filenameImage;
        }
        if ($request->hasfile('image_with_description')){
            $file = $request->file('image_with_description');
            $filenameImage = time() . '_desc.' . $file->getClientOriginalExtension();
            $file->move('uploads/author/'.$author_id.'/', $filenameImage);
            $authorGallery->image_with_description = $filenameImage;
        }

        $authorGallery->save();

        return redirect('admin/author/'.$author_id.'/gallery')->with('message','author gallery added Successfully');
    }

    public function edit($author_id,$gallery_id)
    {
        $gallery = AuthorGallery::find($gallery_id);
        return view('admin.author.gallery_edit', compact('author_id','gallery'));
    }

    public function update(Request $request, $author_id,$gallery_id)
    {

        $authorGallery = AuthorGallery::find($gallery_id);
        $authorGallery->author_id = $author_id;
        $authorGallery->meta_data = $request->input('meta_data');

        if ($request->hasfile('image')){
            $destination = 'uploads/author/'.$author_id.'/'.$authorGallery->image;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('image');
            $filenameImage = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/author/'.$author_id, $filenameImage);
            $authorGallery->image = $filenameImage;
        }
        if ($request->hasfile('image_with_description')){
            $destination = 'uploads/author/'.$author_id.'/'.$authorGallery->image;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('image_with_description');
            $filenameImage = time() . '_desc.' . $file->getClientOriginalExtension();
            $file->move('uploads/author/'.$author_id, $filenameImage);
            $authorGallery->image_with_description = $filenameImage;
        }
        $authorGallery->update();

        return redirect('admin/author/'.$author_id.'/gallery')->with('message','gallery Updated Successfully');
    }

    public function destroy($author_id,$gallery_id)
    {
        $authorGallery = AuthorGallery::find($gallery_id);
        if($authorGallery)
        {
            $destination = 'uploads/author/'.$author_id.'/'.$authorGallery->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $authorGallery->delete();
            return redirect('admin/author/'.$author_id.'/gallery')->with('message','gallery deleted Successfully');
        }
        else
        {
            return redirect('admin/author/'.$author_id.'/gallery')->with('message','No gallery Founded');
        }

    }
}
