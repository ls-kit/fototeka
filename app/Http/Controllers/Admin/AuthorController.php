<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AuthorFormRequest;
use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::orderBy('order')->get();

        return view('admin.author.index', compact('authors'));
    }

    public function create()
    {
        return view('admin.author.create');
    }

    public function store(AuthorFormRequest $request)
    {
        $data = $request->validated();
        $biography = ['en'=>$data['biography']['en'],'al'=>$data['biography']['al']];
        $author = new Author;
        $author->name = $data['name'];
        $author->last_name = $data['last_name'];
        $author->biography = $biography;
        $author->email = $data['email'];
        $author->age_from = $data['age_from'];
        $author->age_to = $data['age_to'];

        if ($request->hasfile('image')){
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/author/', $filename);
            $author->image = $filename;
        }
        if ($request->has('images')){
            $images = [];
            foreach(\request()->file('images') as $key => $img){
                $filenameImages = time() .$key. '_images.' . $img->getClientOriginalExtension();
                $img->move('uploads/author/', $filenameImages);
                $images[] = $filenameImages;
            }
            $author->images = $images;
        }
        $author->address = $data['address'];
        $author->save();

        return redirect('admin/authors')->with('message','Author Added successfully');
    }

    public function orderIncrement($id)
    {
        $currentAuthor = Author::findOrFail($id);
        $newPlace = $currentAuthor->order + 1;
        $oldAuthor = Author::where('order', $newPlace)->first();
        $oldAuthor->order = $oldAuthor->order - 1;
        $oldAuthor->save();
        $currentAuthor->order = $newPlace;
        $currentAuthor->save();
        return redirect()->back()->with('success', 'Action performed successfully!');
    }

    public function orderDecrement($id)
    {
        $currentAuthor = Author::findOrFail($id);
        $newPlace = $currentAuthor->order - 1;
        $oldAuthor = Author::where('order', $newPlace)->first();
        $oldAuthor->order = $oldAuthor->order + 1;
        $oldAuthor->save();
        $currentAuthor->order = $newPlace;
        $currentAuthor->save();
        return redirect()->back()->with('success', 'Action performed successfully!');
    }

    public function edit($author_id)
    {
        $author = Author::find($author_id);
        return view('admin.author.edit',compact('author'));
    }

    public function update(AuthorFormRequest $request, $author_id )
    {
        $data = $request->validated();
        $author = Author::find($author_id);
        $author->name = $data['name'];
        $author->last_name = $data['last_name'];
        $author->biography = $data['biography'];
        $author->email = $data['email'];
        $author->age_from = $data['age_from'];
        $author->age_to = $data['age_to'];

        if ($request->hasfile('image')){
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/author/', $filename);
            $author->image = $filename;
        }
        if ($request->has('images')){
            $images = [];
            foreach(\request()->file('images') as $key => $img){
                $filenameImages = time() .$key. '_images.' . $img->getClientOriginalExtension();
                $img->move('uploads/author/', $filenameImages);
                $images[] = $filenameImages;
            }
            $author->images = $images;
        }

        $author->address = $data['address'];
        $author->update();

        return redirect('admin/authors')->with('message','Author Updated successfully');
    }

    public function destroy($author_id)
    {
        $author = Author::find($author_id);
        if($author)
        {
            $destination = 'uploads/author/'.$author->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $author->delete();

            return redirect('admin/authors')->with('message','Author is removed successfully');
        }
        else
        {
            return redirect('admin/authors')->with('message','Author Not Found');
        }


    }

}
