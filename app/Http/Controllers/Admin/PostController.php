<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostFormRequest;
use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('order','asc')->with('author')->get();

        return view('admin.post.index',compact('posts'));
    }

    public function create()
    {
        $category = Category::where('status','1')->get();
        $author = Author::all();
        return view('admin.post.create', compact('category','author'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $posts = DB::table('posts')->where('title', 'like', '%'.$search.'%')->paginate(2);
        return view('index', ['posts' => $posts]);
    }

    public function orderIncrement($id)
    {
        $currentAuthor = Post::findOrFail($id);
        $newPlace = $currentAuthor->order + 1;
        $oldAuthor = Post::where('order', $newPlace)->first();
        $oldAuthor->order = $oldAuthor->order - 1;
        $oldAuthor->save();
        $currentAuthor->order = $newPlace;
        $currentAuthor->save();
        return redirect()->back()->with('success', 'Action performed successfully!');
    }

    public function orderDecrement($id)
    {
        $currentAuthor = Post::findOrFail($id);
        $newPlace = $currentAuthor->order - 1;
        $oldAuthor = Post::where('order', $newPlace)->first();
        $oldAuthor->order = $oldAuthor->order + 1;
        $oldAuthor->save();
        $currentAuthor->order = $newPlace;
        $currentAuthor->save();
        return redirect()->back()->with('success', 'Action performed successfully!');
    }

    public function store(PostFormRequest $request)
    {
        $data = $request->validated();
        $name = ['en'=>$data['title']['en'],'al'=>$data['title']['al']];
        $description = ['en'=>$data['description']['en'],'al'=>$data['description']['al']];
        $post = new Post;
        $post->category_id = $data['category_id'];
        $post->title = $name;
        $post->author_id = $data['author_id'];
        $post->description = $description;

        if ($request->hasfile('image')){
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/post/', $filename);
            $post->image = $filename;
        }
        if ($request->hasfile('image_with_description')){
            $file = $request->file('image_with_description');
            $filename_desc = time() . '_desc.' . $file->getClientOriginalExtension();
            $file->move('uploads/post/', $filename_desc);
            $post->image_with_description = $filename_desc;
        }

        $post->original_date = $data['original_date'];
        $post->digital_date = $data['digital_date'];
        $post->physic_description = $data['physic_description'];
        $post->width = $data['width'];
        $post->height = $data['height'];
        $post->material = $data['material'];

        $post->save();

        return redirect('admin/posts')->with('message','Post added Successfully');
    }

    public function edit ($post_id)
    {
        $category = Category::where('status','1')->get();
        $author = Author::all();
        $post = Post::find($post_id);
        return view('admin.post.edit',compact('post','category', 'author'));
    }

    public function update(PostFormRequest $request, $post_id)
    {
        $data = $request->validated();
        $name = ['en'=>$data['title']['en'],'al'=>$data['title']['al']];
        $description = ['en'=>$data['description']['en'],'al'=>$data['description']['al']];
        $post = Post::find($post_id);
        $post->category_id = $data['category_id'];
        $post->title = $name;
        $post->author_id = $data['author_id'];
        $post->description = $description;

        if ($request->hasfile('image')){
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/post/', $filename);
            $post->image = $filename;
        }
        if ($request->hasfile('image_with_description')){
            $file = $request->file('image_with_description');
            $filename = time() . '_desc.' . $file->getClientOriginalExtension();
            $file->move('uploads/post/', $filename);
            $post->image_with_description = $filename;
        }

        $post->original_date = $data['original_date'];
        $post->digital_date = $data['digital_date'];
        $post->physic_description = $data['physic_description'];
        $post->width = $data['width'];
        $post->height = $data['height'];
        $post->material = $data['material'];

        $post->update();

        return redirect('admin/posts')->with('message','Post Updated Successfully');
    }

    public function destroy($post_id)
    {
        $post = Post::find($post_id);
        if($post)
        {
            $destination = 'uploads/post/'.$post->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $post->delete();
            return redirect('admin/posts')->with('message','Post Deleted Successfully');
        }
        else
        {
            return redirect('admin/posts')->with('message','Post Not Found');
        }


    }

}
