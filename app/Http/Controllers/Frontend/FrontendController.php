<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Author;
use App\Models\AuthorGallery;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostGallery;
use App\Models\Reportage;
use App\Models\Reportage_gallery;
use App\Models\Settings;
use App\Models\Slider;
use App\Models\TermsAndConditions;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class FrontendController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        return view('frontend.src.pages.home.home',compact('slider'));
    }
    public function article()
    {
        return view('frontend.src.pages.home.article');
    }

    public function about(){
        $about = About::all();
        $pageSettings = Settings::where('page','about')->first()->settings;
        return view('frontend.src.pages.about.about', compact('about','pageSettings'));
    }

    public function category(){
        $categories = Category::all();
        return view('frontend.src.pages.category.category', compact('categories'));
    }
    public function singleCategory($id){
        $category = Category::findOrFail($id);
        return view('frontend.src.pages.category.single-category', compact('category'));
    }

    public function collection(){
        $posts = Post::orderBy('order')->get();
        return view('frontend.src.collection.collection',compact('posts'));
    }

    public function detailedCollection($id){
        $post = Post::where('id',$id)->with('author')->first();
        return view('frontend.src.collection.single-collection.collection_details',compact('post'));
    }
    public function singleCollection($id){
        $post = Post::where('id',$id)->with('author')->first();
        $pervious = Post::where('id', '<', $post->id)->max('id');
        $next = Post::where('id', '>', $post->id)->min('id');

        if($next == null) $next = Post::first()->id;
        if($pervious == null) $pervious = Post::latest()->first()->id;
        return view('frontend.src.collection.single-collection.singlecollection',compact('post','pervious','next'));
    }
    public function singleCollectionGallery($id,$gallery_id){
        $gallery = PostGallery::where('id',$gallery_id)->where('post_id',$id)->firstOrFail();
        $pervious = PostGallery::where('id', '<', $gallery->id)->where('post_id',$id)->max('id');
        $next = PostGallery::where('id', '>', $gallery->id)->where('post_id',$id)->min('id');
        if($next == null) $next = PostGallery::where('post_id',$id)->first()->id;
        if($pervious == null) $pervious = PostGallery::where('post_id',$id)->latest()->first()->id;
        return view('frontend.src.collection.single-collection.single_collection_gallery',compact('gallery','next','pervious'));
    }

    public function authorsList(){
        $authors = Author::orderBy('order')->get();
        return view('frontend.src.authors.authors-list',compact('authors'));
    }

    public function singleAuthor($id){
        $authors = Author::where('id',$id)->with('gallery')->first();
        return view('frontend.src.authors.single-author.single-author',compact('authors'));
    }
    public function detailedAuthor($id){
        $authors = Author::where('id',$id)->first();
        return view('frontend.src.authors.single-author.detailed-author',compact('authors'));
    }

    public function galleryAuthor($id,$gallery_id = 0){
        $pervious = AuthorGallery::where('id', '<', $gallery_id)->where('author_id',$id)->max('id');
        $next = AuthorGallery::where('id', '>', $gallery_id)->where('author_id',$id)->min('id');
        $gallery = AuthorGallery::where('id',$gallery_id)->where('author_id',$id)->firstOrFail();
        if($next == null) $next = AuthorGallery::where('author_id',$id)->first()->id;
        if($pervious == null) $pervious = AuthorGallery::where('author_id',$id)->latest()->first()->id;
        return view('frontend.src.authors.single-author.single_author_gallery',compact('gallery','next','pervious'));
    }

    public function section(){
        $category = Category::all();
        return view('frontend.src.section.section',compact('category'));
    }

    public function singleSection($id){
        $category = Category::where('id',$id)->with('posts')->first();
        return view('frontend.src.section.single-section.single-section',compact('category'));
    }

    public function reportage(){
        $reportages = Reportage::orderBy('year','asc')->get();
        return view('frontend.src.pages.report.reportage',compact('reportages'));
    }
    public function singleReportage($id){
        $reportage = Reportage::with('gallery')->findOrFail($id);
        return view('frontend.src.pages.report.single-reportage',compact('reportage'));
    }
    public function singleReportageGallery($id,$gallery_id){
        $gallery = Reportage_gallery::where('id',$gallery_id)->where('reportage_id',$id)->firstOrFail();
        $pervious = Reportage_gallery::where('id', '<', $gallery->id)->where('reportage_id',$id)->max('id');
        $next = Reportage_gallery::where('id', '>', $gallery->id)->where('reportage_id',$id)->min('id');
        if($next == null) $next = Reportage_gallery::where('reportage_id',$id)->first()->id;
        if($pervious == null) $pervious = Reportage_gallery::where('reportage_id',$id)->latest()->first()->id;
        return view('frontend.src.pages.report.single_reportage_gallery',compact('gallery','next','pervious'));
    }

    public function contact(){
        return view('frontend.src.pages.contact.contact');
    }

    public function termsAndConditions()
    {
        $data['terms'] = TermsAndConditions::first();

        return view('frontend.src.pages.terms-and-conditions.index', $data);
    }

    public function searchIndex()
    {
        return view('frontend.src.pages.search.index');
    }

    public function searchContent(Request $request)
    {
        $data['posts'] = Post::where('title', 'like', '%' . $request->search . '%')
                         ->orWhere('description', 'like', '%' . $request->search . '%')->get();

        $data['post_collections'] = PostGallery::where('meta_data', 'like', '%' . $request->search . '%')->get();

        $data['authors'] = Author::where('name', 'like', '%' . $request->search . '%')
                           ->orWhere('last_name', 'like', '%' . $request->search . '%')
                           ->orWhere('biography', 'like', '%' . $request->search . '%')->get();

        $data['author_collections'] = AuthorGallery::where('meta_data', 'like', '%' . $request->search . '%')->get();

        $data['reportages'] = Reportage::where('name', 'like', '%' . $request->search . '%')
                           ->orWhere('description', 'like', '%' . $request->search . '%')->get();

        // $data['reportage_collections'] = Reportage_gallery::where('meta_data', 'like', '%' . $request->search . '%')->get();

        $data['categories'] = Category::where('name', 'like', '%' . $request->search . '%')
                           ->orWhere('description', 'like', '%' . $request->search . '%')->get();

        return view('frontend.src.pages.search.index', $data);
    }
}
