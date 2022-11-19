<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostGalleryController extends Controller
{
    public function index($post_id)
    {
        $galleries = PostGallery::where('post_id',$post_id)->get();
        return view('admin.post.gallery', compact('galleries','post_id'));
    }

    public function create($post_id)
    {
        return view('admin.post.gallery_create',compact('post_id'));
    }

    public function store(Request $request,$post_id)
    {

        $postGallery = new PostGallery();
        $postGallery->post_id = $post_id;
        $postGallery->meta_data = $request->input('meta_data');

        if ($request->hasfile('image')){
            $file = $request->file('image');
            $filenameImage = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/post/'.$post_id.'/', $filenameImage);
            $postGallery->image = $filenameImage;
        }
        if ($request->hasfile('image_with_description')){
            $file = $request->file('image_with_description');
            $filenameImage = time() . '_desc.' . $file->getClientOriginalExtension();
            $file->move('uploads/post/'.$post_id.'/', $filenameImage);
            $postGallery->image_with_description = $filenameImage;
        }

        $postGallery->save();

        return redirect('admin/post/'.$post_id.'/gallery')->with('message','post gallery added Successfully');
    }

    public function edit($post_id,$gallery_id)
    {
        $gallery = PostGallery::find($gallery_id);
        return view('admin.post.gallery_edit', compact('post_id','gallery'));
    }

    public function update(Request $request, $post_id,$gallery_id)
    {

        $postGallery = PostGallery::find($gallery_id);
        $postGallery->post_id = $post_id;
        $postGallery->meta_data = $request->input('meta_data');

        if ($request->hasfile('image')){
            $destination = 'uploads/post/'.$post_id.'/'.$postGallery->image;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('image');
            $filenameImage = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/post/'.$post_id, $filenameImage);
            $postGallery->image = $filenameImage;
        }
        if ($request->hasfile('image_with_description')){
            $destination = 'uploads/post/'.$post_id.'/'.$postGallery->image;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('image_with_description');
            $filenameImage = time() . '_desc.' . $file->getClientOriginalExtension();
            $file->move('uploads/post/'.$post_id, $filenameImage);
            $postGallery->image_with_description = $filenameImage;
        }
        $postGallery->update();

        return redirect('admin/post/'.$post_id.'/gallery')->with('message','gallery Updated Successfully');
    }

    public function destroy($post_id,$gallery_id)
    {
        $postGallery = PostGallery::find($gallery_id);
        if($postGallery)
        {
            $destination = 'uploads/post/'.$post_id.'/'.$postGallery->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $postGallery->delete();
            return redirect('admin/post/'.$post_id.'/gallery')->with('message','gallery deleted Successfully');
        }
        else
        {
            return redirect('admin/post/'.$post_id.'/gallery')->with('message','No gallery Founded');
        }

    }
}
